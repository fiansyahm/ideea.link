<?php

namespace App\Http\Controllers;
use App\Models\Khitan;
use App\Models\Theme;
use App\Models\Wedding;
use App\Models\Confirmationkhitan;
use App\Models\Page;
use App\Models\User;
use App\Models\Code;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class KhitanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function registerKhitan(){
        return view('khitan.register-khitan');
     }
     public function contohKhitan(){
        return view('invitation.contoh-wedding');
     }
     
     public function addKhitan(Request $request){
        $request->validate([
            "nickname" => 'required',
            "fullname" => 'required',
            "fathername" => 'required',
            "mothername" => 'required',
            "child" => 'required',
            
            "date" => 'required',
            "hourStart" => 'required',
            "placeName" => 'required',
            "placeAddress" => 'required',
            'googleAddress' => 'required',
            
        ]);

        $hourEnd=$request->hourEnd ?: date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));

        $photo = $request->photo ?: 'https://storage.googleapis.com/fastwork-static/6a19c479-994b-4572-8fb5-95bf378f71e6.jpg';
        $instagram = $request->instagram ?: NULL;

        $bank = $request->bank ?: NULL;
        $accountName = $request->accountName ?: NULL;
        $accountNumber = $request->accountNumber ?: NULL;

        $bank2 = $request->bank2 ?: NULL;
        $accountName2 = $request->accountName2 ?: NULL;
        $accountNumber2 = $request->accountNumber2 ?: NULL;

        $giftAddress = $request->giftAddress ?: NULL;
        
        $congratulations = $request->congratulations ?: 0;
        
        $theme = $request->theme ?: 1;
        $music = $request->music ?: 'https://github.com/fiansyahm/JQuery/raw/main/beautiful.mp3?raw=true';
        
        // $wedding = Khitan::all()->where('fullname', $request->fullname);
        // if(count($wedding)>0){
        //     $id = DB::table('khitans')->where('fullname', $request->fullname)->value('id');
        //     $redirect="list-khitan/$id";
        //     return redirect($redirect)->with('status', 'Data Sudah Ada');
        // }

        Khitan::create([
            "nickname" => $request->nickname,
            "fullname" => $request->fullname,
            "child" => $request->child,
            "fathername" => $request->fathername,
            "mothername" => $request->mothername,
            "photo"=>$photo,
            "instagram"=>$instagram,

            "date" => $request->date,
            "hourStart" => $request->hourStart,
            "hourEnd" => $hourEnd,
            "placeName" => $request->placeName,
            "placeAddress" => $request->placeAddress,
            "googleAddress" => $request->googleAddress,
            
            
            "bank"=> $bank,
            "accountName"=> $accountName,
            "accountNumber"=> $accountNumber,

            "bank2"=> $bank2,
            "accountName2"=> $accountName2,
            "accountNumber2"=> $accountNumber2,

            "giftAddress"=> $giftAddress,
            "congratulations"=> $congratulations,

            "theme"=> $theme,
            "music"=> $music,
                    
         ]);

         $code = Code::all()->where('kode', $request->code);
         if(count($code)>0){
             Code::where('kode', $request->code)->delete();
         }else{
             return redirect()->back()->with('status', 'Kode Tidak Valid');
         }
        $id = DB::table('khitans')->where('fullname', $request->fullname)->value('id');
        $redirect="list-khitan/$id";
        return redirect($redirect)->with('status', 'Data Sukses Ditambah');
        
        
     }
     public function listKhitan($id){
         $wedding = Wedding::all()->where('id', $id)->first();
        return view('invitation.list-wedding',['wedding'=>$wedding]);
     }
     public function invitationKhitan($id, $guest){
         $khitan = Khitan::all()->where('id', $id)->first();
         $view='khitan.theme.theme-'.$khitan->theme;
         $hadir=Confirmationkhitan::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
         $tidakhadir=Confirmationkhitan::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
         $raguhadir=Confirmationkhitan::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
         $totalcomments=$hadir+$tidakhadir+$raguhadir;
         $komentar=Confirmationkhitan::all()->where('id-couple', $id);

         $khitan->hourStart = date('H:i', strtotime($khitan->hourStart));
         $khitan->hourEnd = date('H:i', strtotime($khitan->hourEnd));

         return view($view,['khitan'=>$khitan,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'komentar'=>$komentar]);
     }

     public function confirmationKhitan(Request $request){
         $request->validate([
            "id-couple" => 'required',
            "guest" => 'required',
            "guest-name" => 'required',
            "ucapan-wedding" => 'required',
            "confirmation-attendance" => 'required',
         ]);
         Confirmationkhitan::create([
            "id-couple" => $request->input('id-couple'),
            "guest-name" => $request->input('guest-name'),
            "ucapan-wedding" => $request->input('ucapan-wedding'),
            "confirmation-attendance" => $request->input('confirmation-attendance'),
         ]);
         $idcouple=$request->input('id-couple');
         $guest=$request->input('guest');
         $redirect="invitation-khitan/$idcouple/$guest";
         return redirect($redirect)->with('status', 'Data Sukses Ditambah');
     }

     public function listGuestKhitan($id){
         $wedding = Wedding::all()->where('id', $id)->first();
         $confirmation = Confirmationkhitan::all()->where('id-couple', $id);
         return view('invitation.list-guest-wedding',['wedding'=>$wedding,'confirmation'=>$confirmation]);
     }

     public function AdminDashboard(){
         return view('admin-khitan.dashboard');
     }

     public function AdminList(){
         $khitan = Khitan::all();
         // return $khitan;
         return view('admin-khitan.list-khitan',['khitan'=>$khitan]);
     }

     public function AdminEdit($id){
         $khitan = Khitan::all()->where('id', $id)->first();
         return view('admin-khitan.edit-khitan',['khitan'=>$khitan]);
     }

     public function AdminDelete($id){
            $wedding = Khitan::all()->where('id', $id)->first();
            $wedding->delete();
            return redirect()->back()->with('status', 'Data Sukses Dihapus');
    }

    
     public function update(Request $request){
        $weddingData = $request->except(['id', '_token']); // Exclude the 'id' and '_token' fields
    
        Khitan::where('id', $request->id)->update($weddingData);
    
        // You can return a response indicating the update was successful
        return redirect()->back()->with('status', 'Data Sukses Diupdate');
    }
     

}

// watercolor belum beli
// https://sebarundangan.xyz/Tema-watercollor/

// sudah beli
// https://sebarundangan.xyz/tema-klasik/

// 1-3
// https://web.sebarundangan.xyz/khitan1/
// https://web.sebarundangan.xyz/ulang-tahun1
// https://web.sebarundangan.xyz/aqiqah1/


// https://sebarundangan.xyz/minimalis1/
// Rubah angka 1 - 17

// https://sebarundangan.xyz/floral1/
// Rubah angka 1 - 5

// https://sebarundangan.xyz/non-foto-1/
// Rubah angka 1 - 7

// https://sebarundangan.xyz/adat-batak/
// https://sebarundangan.xyz/adat-minang/
// https://sebarundangan.xyz/adat-jawa/