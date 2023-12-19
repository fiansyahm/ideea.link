<?php

namespace App\Http\Controllers;
use App\Models\Aqiqah;
use App\Models\Theme;
use App\Models\Wedding;
use App\Models\Confirmationaqiqah;
use App\Models\Page;
use App\Models\User;
use App\Models\Code;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AqiqahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function latihan(){
        return view('latihan');
     }
     public function tria(){
        return view('tria');
     }
     public function wedding(){
        return view('invitation.wedding');
     }

     public function login(){
        return view('invitation.login');
     }

     public function katalog(){
        return view('invitation.katalog');
     }

     public function wpadmin(){
        return view('admin-wedding.wpadmin');
     }

     public function registerAqiqah(){
        return view('aqiqah.register-aqiqah');
     }
     public function contohAqiqah(){
        return view('invitation.contoh-wedding');
     }
     
     public function addAqiqah(Request $request){
         // return $request;
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

        $photo = $request->photo ?: 'https://web.sebarundangan.xyz/wp-content/uploads/2023/11/Biru-Dan-Kuning-Watercolor-Tasyakuran-Dan-Aqiqah-Instagraffsfm-Story-e1699702738823-286x300.png';
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
        
      //   $aqiqah = Aqiqah::all()->where('fullname', $request->fullname);
      //   if(count($aqiqah)>0){
      //       $id = DB::table('aqiqahs')->where('fullname', $request->fullname)->value('id');
      //       $redirect="list-aqiqah/$id";
      //       return redirect($redirect)->with('status', 'Data Sudah Ada');
      //   }

       
        Aqiqah::create([
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
        $id = DB::table('aqiqahs')->where('fullname', $request->fullname)->value('id');
        $redirect="list-aqiqah/$id";
        return redirect($redirect)->with('status', 'Data Sukses Ditambah');
        
        
     }
     public function listAqiqah($id){
         $aqiqah = Aqiqah::all()->where('id', $id)->first();
        return view('aqiqah.list-aqiqah',['aqiqah'=>$aqiqah]);
     }
     public function invitationAqiqah($id, $guest){
         $aqiqah = Aqiqah::all()->where('id', $id)->first();
         $view='aqiqah.theme.theme-'.$aqiqah->theme;
         $hadir=Confirmationaqiqah::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
         $tidakhadir=Confirmationaqiqah::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
         $raguhadir=Confirmationaqiqah::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
         $totalcomments=$hadir+$tidakhadir+$raguhadir;
         $komentar=Confirmationaqiqah::all()->where('id-couple', $id);

         $aqiqah->hourStart = date('H:i', strtotime($aqiqah->hourStart));
         $aqiqah->hourEnd = date('H:i', strtotime($aqiqah->hourEnd));

         return view($view,['aqiqah'=>$aqiqah,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'komentar'=>$komentar]);
     }

     public function confirmationAqiqah(Request $request){
         $request->validate([
            "id-couple" => 'required',
            "guest" => 'required',
            "guest-name" => 'required',
            "ucapan-wedding" => 'required',
            "confirmation-attendance" => 'required',
         ]);
         Confirmationaqiqah::create([
            "id-couple" => $request->input('id-couple'),
            "guest-name" => $request->input('guest-name'),
            "ucapan-wedding" => $request->input('ucapan-wedding'),
            "confirmation-attendance" => $request->input('confirmation-attendance'),
         ]);
         $idcouple=$request->input('id-couple');
         $guest=$request->input('guest');
         $redirect="invitation-aqiqah/$idcouple/$guest";
         return redirect($redirect)->with('status', 'Data Sukses Ditambah');
     }

     public function listGuestAqiqah($id){
         $aqiqah = Wedding::all()->where('id', $id)->first();
         $confirmation = Confirmationaqiqah::all()->where('id-couple', $id);
         return view('invitation.list-guest-wedding',['wedding'=>$aqiqah,'confirmation'=>$confirmation]);
     }

     public function AdminDashboard(){
         return view('admin-aqiqah.dashboard');
     }

     public function AdminList(){
         $aqiqah = Aqiqah::all();
         // return $aqiqah;
         return view('admin-aqiqah.list-aqiqah',['aqiqah'=>$aqiqah]);
     }

     public function AdminEdit($id){
         $aqiqah = Aqiqah::all()->where('id', $id)->first();
         return view('admin-aqiqah.edit-aqiqah',['aqiqah'=>$aqiqah]);
     }

     public function AdminDelete($id){
            $aqiqah = Aqiqah::all()->where('id', $id)->first();
            $aqiqah->delete();
            return redirect()->back()->with('status', 'Data Sukses Dihapus');
    }

    
     public function update(Request $request){
        $aqiqahData = $request->except(['id', '_token']); // Exclude the 'id' and '_token' fields
    
        Aqiqah::where('id', $request->id)->update($aqiqahData);
    
        // You can return a response indicating the update was successful
        return redirect()->back()->with('status', 'Data Sukses Diupdate');
    }
     

}

// watercolor belum beli
// https://sebarundangan.xyz/Tema-watercollor/

// sudah beli
// https://sebarundangan.xyz/tema-klasik/

// 1-3
// https://web.sebarundangan.xyz/aqiqah1/
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