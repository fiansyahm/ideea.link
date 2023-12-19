<?php

namespace App\Http\Controllers;
use App\Models\Theme;
use App\Models\Wedding;
use App\Models\Confirmation;
use App\Models\Page;
use App\Models\Song;
use App\Models\Code;
use App\Models\Pendingpayment;
use App\Models\Catalog;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     function getHostnameFromURL(Request $request) {
        $hostname = $request->getHost();
        $port = $request->getPort();

        $fullHostname = $hostname;
        if ($port !== 80 && $port !== 443) {
            $fullHostname .= ":$port";
        }

        return response()->json(['hostname' => $fullHostname]);
     }

     public function latihan(){
        return view('latihan');
     }
     public function tria(){
        return view('tria');
     }
     public function aboutus(){
        return view('aboutus');
     }


     public function wedding(){
        $host=$this->getHostnameFromURL(request());
        if($host->getData()->hostname=="nikah.in"){
            return view('invitation.wedding-muslim',['androidpic'=>'https://i.ibb.co/BVN8H0t/muslim-couple-png-for-andorid.png']);
        }
        elseif($host->getData()->hostname=="akad.in"|| $host->getData()->hostname=="127.0.0.1:8000"){
            return view('invitation.wedding',['androidpic'=>'https://i.ibb.co/prtTWBW/Group-3.png']);
        }
        else{
            return "URL Maintenance";
        }

     }

     public function weddingmuslim(){
        return view('invitation.wedding-muslim',['androidpic'=>'https://i.ibb.co/BVN8H0t/muslim-couple-png-for-andorid.png']);
     }
     

     public function login(){
        return view('invitation.login');
     }

     public function register(){
        return view('register');
     }

     public function katalog()
    {
        $minutes = 60;
        $catalogs = Cache::remember('catalog_data', $minutes, function () {
            return Catalog::all();
        });

        return view('invitation.katalog', ['catalogs' => $catalogs]);
    }

    public function sosmed(){
        return view('invitation.sosmed');
    }

     public function wpadmin(){
         if(Auth::check()){
            return redirect('/admin/wedding/dashboard');
         }
         else{
            return redirect('/wpadmin-login');
         }
     }

     public function registerWedding(){
        $songs= Cache::remember('song_data', 60, function () {
            return Song::all();
        });
        return view('invitation.register-wedding',['songs'=>$songs]);
     }
     public function contohWedding(){
        return view('invitation.contoh-wedding');
     }
     
     public function addWedding(Request $request){
         if(Auth::check()&& (Auth::user()->isAdmin=='0' || Auth::user()->isAdmin=='1')){
         }
         else{
            // return redirect('/wpadmin-login');
            // ke metode pembayaran
         }
        //  return $request;
        $request->validate([
            "nicknameMale" => 'required',
            "fullnameMale" => 'required',
            "fathernameMale" => 'required',
            "mothernameMale" => 'required',
            "childMale" => 'required',

            "nicknameFemale" => 'required',
            "fullnameFemale" => 'required',
            "fathernameFemale" => 'required',
            "mothernameFemale" => 'required',
            "childFemale" => 'required',
            
        ]);

        $weddingHourEnd=$request->weddingHourEnd ?: date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $solemnizationHourEnd=$request->solemnizationHourEnd ?: date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));

        if ($request->hasFile('photoMale')) {
            $image = $request->file('photoMale');
            $imageName = 'photoMale'.time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/wedding', $imageName); // Store the image in the storage/app/public/images directory
            // get original root url
            $photoMale = '/storage/wedding/' . $imageName;
        }
        else{
            $photoMale = 'https://storage.googleapis.com/fastwork-static/6a19c479-994b-4572-8fb5-95bf378f71e6.jpg';
        }

        if($request->hasFile('photoFemale')){
            $image = $request->file('photoFemale');
            $imageName ='photoFemale' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/wedding', $imageName); // Store the image in the storage/app/public/images directory
            $photoFemale= '/storage/wedding/' . $imageName;
        }
        else{
            $photoFemale = 'https://gcdnb.pbrd.co/images/AXJKaEEQlRUv.png?o=1';
        }
        
        
        $instagramMale = $request->instagramMale ?: NULL;
        $instagramFemale = $request->instagramFemale ?: NULL;

        $solemnizationTitle=$request->solemnizationTitle ?: 'Akad Nikah';
        $solemnizationDate=$request->solemnizationDate ?: date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $solemnizationHourStart=$request->solemnizationHourStart ?: date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $solemnizationHourEnd=$request->solemnizationHourEnd ?: date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $solemnizationPlaceName=$request->solemnizationPlaceName ?: NULL;
        $solemnizationPlaceAddress=$request->solemnizationPlaceAddress ?: NULL;
        $solemnizationGoogleAddress=$request->solemnizationGoogleAddress ?: NULL;
        
        $weddingTitle=$request->weddingTitle ?: 'Resepsi';
        $weddingDate=$request->weddingDate ? : date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $weddingHourStart=$request->weddingHourStart ? : date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $weddingHourEnd=$request->weddingHourEnd ? : date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $weddingPlaceName=$request->weddingPlaceName ? : NULL;
        $weddingPlaceAddress=$request->weddingPlaceAddress ? : NULL;
        $weddingGoogleAddress=$request->weddingGoogleAddress ? : NULL;

        $ngunduhTitle=$request->ngunduhTitle ?: 'Ngunduh Mantu';
        $ngunduhDate=$request->ngunduhDate ? : date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $ngunduhHourStart=$request->ngunduhHourStart ? : date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $ngunduhHourEnd=$request->ngunduhHourEnd ? : date('Y-m-d H:i:s', strtotime("2023-10-08 " . "23:59"));
        $ngunduhPlaceName=$request->ngunduhPlaceName ? : NULL;
        $ngunduhPlaceAddress=$request->ngunduhPlaceAddress ? : NULL;
        $ngunduhGoogleAddress=$request->ngunduhGoogleAddress ? : NULL;

        $fotoPrewedding = $request->fotoPrewedding ?: 0;
      //   foto1
        if($request->hasFile('foto1')){
            $image = $request->file('foto1');
            $imageName = 'foto1'. time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/wedding', $imageName); // Store the image in the storage/app/public/images directory
            $foto1= '/storage/wedding/' . $imageName;
        }
        else{
            $foto1 = $request->foto1 ?: "https://static.vecteezy.com/system/resources/thumbnails/007/885/402/small_2x/muslim-wedding-couple-flat-illustration-vector.jpg";
        }
      //foto2 
        if($request->hasFile('foto2')){
            $image = $request->file('foto2');
            $imageName = 'foto2'.time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/wedding', $imageName); // Store the image in the storage/app/public/images directory
            $foto2= '/storage/wedding/' . $imageName;
        }
        else{
            $foto2 = $request->foto2 ?: "https://static.vecteezy.com/system/resources/thumbnails/007/885/402/small_2x/muslim-wedding-couple-flat-illustration-vector.jpg";
        }
      //   foto3
        if($request->hasFile('foto3')){
            $image = $request->file('foto3');
            $imageName = 'foto3'.time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/wedding', $imageName); // Store the image in the storage/app/public/images directory
            $foto3= '/storage/wedding/' . $imageName;
        }
        else{
            $foto3 = $request->foto3 ?: "https://static.vecteezy.com/system/resources/thumbnails/007/885/402/small_2x/muslim-wedding-couple-flat-illustration-vector.jpg";
        }
      //   foto4
        if($request->hasFile('foto4')){
            $image = $request->file('foto4');
            $imageName = 'foto4'.time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/wedding', $imageName); // Store the image in the storage/app/public/images directory
            $foto4= '/storage/wedding/' . $imageName;
        }
        else{
            $foto4 = $request->foto4 ?: "https://wp.onethreeonefour.com/wp-content/uploads/2017/05/bicycle-ever-after-studio-770x490.jpg";
        }
      //   foto5
        if($request->hasFile('foto5')){
               $image = $request->file('foto5');
               $imageName = 'foto5'.time() . '.' . $image->getClientOriginalExtension();
               $image->storeAs('public/wedding', $imageName); // Store the image in the storage/app/public/images directory
               $foto5= '/storage/wedding/' . $imageName;
         }
         else{
               $foto5 = $request->foto5 ?: "https://images.says.com/uploads/story_source/source_image/966786/4e4b.jpg";
         }
        $bank = $request->bank ?: NULL;
        $accountName = $request->accountName ?: NULL;
        $accountNumber = $request->accountNumber ?: NULL;
        $giftAddress = $request->giftAddress ?: NULL;

        $bank2 = $request->bank2 ?: NULL;
        $accountName2 = $request->accountName2 ?: NULL;
        $accountNumber2 = $request->accountNumber2 ?: NULL;
        $giftAddress2 = $request->giftAddress2 ?: NULL;
        
        $congratulations = $request->congratulations ?: 0;
        
        $theme = $request->theme ?: 1;
        $music = $request->music ?: 'https://github.com/fiansyahm/JQuery/raw/main/beautiful.mp3?raw=true';
        
        $wedding = Cache::remember('wedding_data', 60, function () use ($request) {
            return Wedding::all()->where('fullnameMale', $request->fullnameMale)->where('fullnameFemale', $request->fullnameFemale);
        });
        if(count($wedding)>0){
            $id = DB::table('weddings')->where('fullnameMale', $request->fullnameMale)->where('fullnameFemale', $request->fullnameFemale)->value('id');
            $redirect="list-wedding/$id";
            return redirect($redirect)->with('status', 'Data Sudah Ada');
        }

        $ourstoryoption = $request->ourstoryoption ?: 0;
        
        $ourstorydate1 = $request->ourstorydate1 ?: NULL;
        $ourstorytitle1 = $request->ourstorytitle1 ?: NULL;
        $ourstorydescription1 = $request->ourstorydescription1 ?: NULL;

        $ourstorydate2 = $request->ourstorydate2 ?: NULL;
        $ourstorytitle2 = $request->ourstorytitle2 ?: NULL;
        $ourstorydescription2 = $request->ourstorydescription2 ?: NULL;

        $ourstorydate3 = $request->ourstorydate3 ?: NULL;
        $ourstorytitle3 = $request->ourstorytitle3 ?: NULL;
        $ourstorydescription3 = $request->ourstorydescription3 ?: NULL;

        $ourstoryvideo = $request->ourstoryvideo ?: NULL;
        $ourlivestreaming=$request->ourlivestreaming ?: NULL;

        Wedding::create([
            "nicknameMale" => $request->nicknameMale,
            "fullnameMale" => $request->fullnameMale,
            "childMale" => $request->childMale,
            "fathernameMale" => $request->fathernameMale,
            "mothernameMale" => $request->mothernameMale,
            "photoMale"=>$photoMale,
            "instagramMale"=>$instagramMale,

            "nicknameFemale" => $request->nicknameFemale,
            "fullnameFemale" => $request->fullnameFemale,
            "childFemale" => $request->childFemale,
            "fathernameFemale" => $request->fathernameFemale,
            "mothernameFemale" => $request->mothernameFemale,
            "photoFemale"=>$photoFemale,
            "instagramFemale"=>$instagramFemale,
            
            "solemnizationTitle" => $solemnizationTitle,
            "weddingDate" => $weddingDate,
            "weddingHourStart" => $weddingHourStart,
            "weddingHourEnd" => $weddingHourEnd,
            "weddingPlaceName" => $weddingPlaceName,
            "weddingPlaceAddress" => $weddingPlaceAddress,
            "weddingGoogleAddress" => $weddingGoogleAddress,

            "weddingTitle" => $weddingTitle,
            "solemnizationDate" => $solemnizationDate,
            "solemnizationHourStart" => $solemnizationHourStart,
            "solemnizationHourEnd" => $solemnizationHourEnd,
            "solemnizationPlaceName" => $solemnizationPlaceName,
            "solemnizationPlaceAddress" => $solemnizationPlaceAddress,
            "solemnizationGoogleAddress" => $solemnizationGoogleAddress,
            
            "ngunduhTitle" => $ngunduhTitle,
            "ngunduhDate" => $ngunduhDate,
            "ngunduhHourStart" => $ngunduhHourStart,
            "ngunduhHourEnd" => $ngunduhHourEnd,
            "ngunduhPlaceName" => $ngunduhPlaceName,
            "ngunduhPlaceAddress" => $ngunduhPlaceAddress,
            "ngunduhGoogleAddress" => $ngunduhGoogleAddress,

            "fotoPrewedding" => $fotoPrewedding,
            "foto1" => $foto1,
            "foto2" => $foto2,
            "foto3" => $foto3,
            "foto4" => $foto4,
            "foto5" => $foto5,
            
            "bank"=> $bank,
            "accountName"=> $accountName,
            "accountNumber"=> $accountNumber,
            "giftAddress"=> $giftAddress,
            "bank2"=> $bank2,
            "accountName2"=> $accountName2,
            "accountNumber2"=> $accountNumber2,
            "giftAddress2"=> $giftAddress2,
            "congratulations"=> $congratulations,

            "theme"=> $theme,
            "music"=> $music,
            "timezone"=> $request->timezone,
            
            "ourstoryoption"=> $ourstoryoption,

            "ourstorydate1"=> $ourstorydate1,
            "ourstorytitle1"=> $ourstorytitle1,
            "ourstorydescription1"=> $ourstorydescription1,

            "ourstorydate2"=> $ourstorydate2,
            "ourstorytitle2"=> $ourstorytitle2,
            "ourstorydescription2"=> $ourstorydescription2,

            "ourstorydate3"=> $ourstorydate3,
            "ourstorytitle3"=> $ourstorytitle3,
            "ourstorydescription3"=> $ourstorydescription3,
            
            "ourstoryvideo"=> $ourstoryvideo,
            "ourlivestreaming"=> $ourlivestreaming,
         
         ]);
        
        $code = $request->code ?: 'midtrans';
        $code = Code::all()->where('kode', $code);
        if(count($code)>0){
            Code::where('kode', $code)->delete();
        }
        elseif($code=="midtrans"){
            $id = DB::table('weddings')->where('fullnameMale', $request->fullnameMale)->where('fullnameFemale', $request->fullnameFemale)->latest('id')->value('id');
            Pendingpayment::create([
               "type" => "wedding",
               "id_invitation" => $id,
            ]);
            $random = date('Ymd').rand(1000,9999);
            $code=$random."kode".$id;
            return redirect("/invitation-wedding/$id/guest");
         }   
         else{
            return redirect()->back()->with('status', 'Kode Tidak Valid');
        }
        $id = DB::table('weddings')->where('fullnameMale', $request->fullnameMale)->where('fullnameFemale', $request->fullnameFemale)->latest('id')->value('id');
        $redirect="list-wedding/$id";
        
        return redirect($redirect)->with('status', 'Data Sukses Ditambah');
        
        
     }

     public function listWedding($id){
         $wedding = Wedding::all()->where('id', $id)->first();
        return view('invitation.list-wedding',['wedding'=>$wedding]);
     }

     public function invitationWedding($id, $guest){
        $minutes = 60;
        $pendingpayment = Cache::remember('pending_payment_' . $id, $minutes, function () use ($id) {
            return Pendingpayment::where('id_invitation', $id)->get();
        });

        if ($pendingpayment->isNotEmpty()) {
            $random = date('Ymd').rand(1000,9999);
            $code = $random."kode".$id;
            return view('invitation.midtrans-pending', ['id' => $id, 'code' => $code]);
        }

        $wedding = Wedding::find($id);
        $view = 'invitation.theme.theme-'.$wedding->theme;

        $confirmations = Cache::remember('confirmations_' . $id, $minutes, function () use ($id) {
            return Confirmation::where('id-couple', $id)->get();
        });
        $hadir = $confirmations->where('confirmation-attendance', 0)->count();
        $tidakhadir = $confirmations->where('confirmation-attendance', 1)->count();
        $raguhadir = $confirmations->where('confirmation-attendance', 2)->count();

        $totalcomments = $hadir + $tidakhadir + $raguhadir;

        $wedding->solemnizationHourStart = date('H:i', strtotime($wedding->solemnizationHourStart));
        $wedding->solemnizationHourEnd = date('H:i', strtotime($wedding->solemnizationHourEnd));
        $wedding->weddingHourStart = date('H:i', strtotime($wedding->weddingHourStart));
        $wedding->weddingHourEnd = date('H:i', strtotime($wedding->weddingHourEnd));
        $wedding->ngunduhHourStart = date('H:i', strtotime($wedding->ngunduhHourStart));
        $wedding->ngunduhHourEnd = date('H:i', strtotime($wedding->ngunduhHourEnd));

        // api gagal
        // $youtubeLink = 'https://www.youtube.com/watch?v=CNbmVEEW-mA'; // Ganti dengan tautan video YouTube yang sesuai
        // $apiUrl = 'https://convert2mp3s.com/api/single/mp3?url=' . urlencode($youtubeLink);

        // $response = Http::get($apiUrl);

        // if ($response->successful()) {
        //     $audioUrl = $response->json()['link'];
        //     // Lakukan sesuai kebutuhan Anda dengan $audioUrl, misalnya simpan ke database atau tampilkan di view
        //     return view('audioPlayerView', ['audioUrl' => $audioUrl]);
        // } else {
        //     // Tangani jika permintaan ke API gagal
        //     return response()->json(['error' => 'Failed to convert video to audio'], 500);
        // }

        return view($view, [
            'wedding' => $wedding,
            'hadir' => $hadir,
            'tidakhadir' => $tidakhadir,
            'raguhadir' => $raguhadir,
            'totalcomments' => $totalcomments,
            'guest' => $guest
        ]);
    }

     public function pendinginvitationWedding($id, $guest){
      $wedding = Cache::remember('wedding_' . $id, 60, function () use ($id) {
         return Wedding::find($id);
      });
      if($wedding) {
         $createdAt = $wedding->created_at; // Ambil waktu pembuatan wedding

         // Tambahkan 9 jam ke waktu pembuatan wedding
         $nineHoursAfterCreation = $createdAt->copy()->addHours(6);
         // $nineHoursAfterCreation = $createdAt->copy()->addMinutes(1);

         if($nineHoursAfterCreation->isPast()) {
            $wedding->delete();
            Pendingpayment::all()->where('id_invitation', $id)->first()->delete();
            return redirect('/register-wedding')->with('status', 'Waktu pembayaran sudah habis, sudah melewati 6 jam setelah pembuatan wedding. Silahkan buat wedding baru.');
         }
      }

      $wedding = Cache::remember('wedding_' . $id, 60, function () use ($id) {
         return Wedding::find($id);
      });
      $view='invitation.theme.theme-'.$wedding->theme;
      $minutes = 60;
      $confirmations = Cache::remember('confirmations_' . $id, $minutes, function () use ($id) {
        return Confirmation::where('id-couple', $id)->get();
      });
      $hadir = $confirmations->where('confirmation-attendance', 0)->count();
      $tidakhadir = $confirmations->where('confirmation-attendance', 1)->count();
      $raguhadir = $confirmations->where('confirmation-attendance', 2)->count();
      $totalcomments=$hadir+$tidakhadir+$raguhadir;
      return view($view,['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest]);
  }

    public function confirmationWedding(Request $request){
        $request->validate([
        "id-couple" => 'required',
        "guest" => 'required',
        "guest-name" => 'required',
        "ucapan-wedding" => 'required',
        "confirmation-attendance" => 'required',
        ]);
        Confirmation::create([
        "id-couple" => $request->input('id-couple'),
        "guest-name" => $request->input('guest-name'),
        "ucapan-wedding" => $request->input('ucapan-wedding'),
        "confirmation-attendance" => $request->input('confirmation-attendance'),
        ]);
        $idcouple=$request->input('id-couple');
        $guest=$request->input('guest');
        $redirect="invitation-wedding/$idcouple/$guest";
        return redirect($redirect)->with('status', 'Data Sukses Ditambah');
    }

     public function listGuestWedding($id){
         $wedding = Cache::remember('wedding_' . $id, 60, function () use ($id) {
            return Wedding::find($id);
         });
         
         $confirmation = Cache::remember('confirmation_' . $id, 60, function () use ($id) {
            return Confirmation::where('id-couple', $id)->get();
         });
         return view('invitation.list-guest-wedding',['wedding'=>$wedding,'confirmation'=>$confirmation]);
     }

     public function AdminDashboard(){
         return view('admin-wedding.dashboard');
     }

     public function AdminList(){
         $wedding = Cache::remember('wedding_data', 60, function () {
            return Wedding::all();
         });
         return view('admin-wedding.list-wedding',['wedding'=>$wedding]);
     }

     public function AdminEdit($id){
         $wedding = Wedding::find($id);
         
         $songs = Cache::remember('song_data', 60, function () {
            return Song::all();
         });
         return view('admin-wedding.edit-wedding-admin',['wedding'=>$wedding,'songs'=>$songs]);
     }

     public function AdminDelete($id){
         $wedding = Cache::remember('wedding_' . $id, 60, function () use ($id) {
            return Wedding::find($id);
         });
         if(Auth::check()&& Auth::user()->isAdmin=='1'){
            $wedding->delete();
            return redirect()->back()->with('status', 'Data Sukses Dihapus');
         }
         else{
            return redirect()->back()->with('status', 'Data Gagal Dihapus');
         }
      }

     public function updateWedding(Request $request){
        $weddingData = $request->except(['id', '_token']); // Exclude the 'id' and '_token' fields
        $wedding = Wedding::find($request->id);

        // photoMale
        if ($request->hasFile('photoMale')) {
            $image = $request->file('photoMale');
            if (strpos($wedding->photoMale, '/storage/wedding/') !== false) {
                $imageName = explode('/storage/wedding/', $wedding->photoMale)[1];
            } else {
                $imageName = 'photoMale' . time() . '.' . $image->getClientOriginalExtension();
            }
            $photoMale= '/storage/wedding/' . $imageName;
            // Mengecek apakah file sudah ada
            if (Storage::exists('public/wedding/' . $imageName)) {
                // Menghapus file yang sudah ada
                Storage::delete('public/wedding/' . $imageName);
            }
            $image->storeAs('public/wedding', $imageName);
            $weddingData['photoMale'] = $photoMale;
        }

        // photoFemale
        if ($request->hasFile('photoFemale')) {
            $image = $request->file('photoFemale');
            if (strpos($wedding->photoFemale, '/storage/wedding/') !== false) {
                $imageName = explode('/storage/wedding/', $wedding->photoFemale)[1];
            } else {
                $imageName = 'photoFemale' . time() . '.' . $image->getClientOriginalExtension();
            }
            $photoFemale= '/storage/wedding/' . $imageName;
            // Mengecek apakah file sudah ada
            if (Storage::exists('public/wedding/' . $imageName)) {
                // Menghapus file yang sudah ada
                Storage::delete('public/wedding/' . $imageName);
            }
            $image->storeAs('public/wedding', $imageName);
            $weddingData['photoFemale'] = $photoFemale;
        }

        //   foto1
        if ($request->hasFile('foto1')) {
            $image = $request->file('foto1');
            if(strpos($wedding->foto1, '/storage/wedding/') !== false){
                $imageName = explode('/storage/wedding/', $wedding->foto1)[1];
            } else {
                $imageName = 'foto1' . time() . '.' . $image->getClientOriginalExtension();
            }
            $foto1= '/storage/wedding/' . $imageName;
            // Mengecek apakah file sudah ada
            if (Storage::exists('public/wedding/' . $imageName)) {
                // Menghapus file yang sudah ada
                Storage::delete('public/wedding/' . $imageName);
            }
            $image->storeAs('public/wedding', $imageName);
            $weddingData['foto1'] = $foto1;
        }

        //foto2
        if ($request->hasFile('foto2')) {
            $image = $request->file('foto2');
            if(strpos($wedding->foto2, '/storage/wedding/') !== false){
                $imageName = explode('/storage/wedding/', $wedding->foto2)[1];
            } else {
                $imageName = 'foto2' . time() . '.' . $image->getClientOriginalExtension();
            }
            $foto2= '/storage/wedding/' . $imageName;
            // Mengecek apakah file sudah ada
            if (Storage::exists('public/wedding/' . $imageName)) {
                // Menghapus file yang sudah ada
                Storage::delete('public/wedding/' . $imageName);
            }
            $image->storeAs('public/wedding', $imageName);
            $weddingData['foto2'] = $foto2;
        }

        //foto3
        if ($request->hasFile('foto3')) {
            $image = $request->file('foto3');
            if(strpos($wedding->foto3, '/storage/wedding/') !== false){
                $imageName = explode('/storage/wedding/', $wedding->foto3)[1];
            } else {
                $imageName = 'foto3' . time() . '.' . $image->getClientOriginalExtension();
            }
            $foto3= '/storage/wedding/' . $imageName;
            // Mengecek apakah file sudah ada
            if (Storage::exists('public/wedding/' . $imageName)) {
                // Menghapus file yang sudah ada
                Storage::delete('public/wedding/' . $imageName);
            };
            $image->storeAs('public/wedding', $imageName);
            $weddingData['foto3'] = $foto3;
        }

        //foto4
        if ($request->hasFile('foto4')) {
            $image = $request->file('foto4');
            if(strpos($wedding->foto4, '/storage/wedding/') !== false){
                $imageName = explode('/storage/wedding/', $wedding->foto4)[1];
            } else {
                $imageName = 'foto4' . time() . '.' . $image->getClientOriginalExtension();
            }
            $foto4= '/storage/wedding/' . $imageName;
            // Mengecek apakah file sudah ada
            if (Storage::exists('public/wedding/' . $imageName)) {
                // Menghapus file yang sudah ada
                Storage::delete('public/wedding/' . $imageName);
            }
            $image->storeAs('public/wedding', $imageName);
            $weddingData['foto4'] = $foto4;
        }

        //foto5
        if ($request->hasFile('foto5')) {
            $image = $request->file('foto5');
            if(strpos($wedding->foto5, '/storage/wedding/') !== false){
                $imageName = explode('/storage/wedding/', $wedding->foto5)[1];
            } else {
                $imageName = 'foto5' . time() . '.' . $image->getClientOriginalExtension();
            }
            $foto5= '/storage/wedding/' . $imageName;
            // Mengecek apakah file sudah ada
            if (Storage::exists('public/wedding/' . $imageName)) {
                // Menghapus file yang sudah ada
                Storage::delete('public/wedding/' . $imageName);
            }
            $image->storeAs('public/wedding', $imageName);
            $weddingData['foto5'] = $foto5;
        }


        Wedding::where('id', $request->id)->update($weddingData);
    
        // You can return a response indicating the update was successful
        return redirect()->back()->with('status', 'Data Sukses Diupdate');
    }

    public function UserEdit($id, $couple1, $couple2){
        $songs= Song::all();
        $couple1 = ucwords($couple1);
        $couple2 = ucwords($couple2);
        $wedding = Wedding::all()->where('id', $id)->where('nicknameMale', $couple1);
        if(count($wedding)>0){
         // nanti diganti ya,buatin sendiri
            $wedding = Wedding::all()->where('id', $id)->first();
            return view('admin-wedding.edit-wedding-user',['wedding'=>$wedding,'songs'=>$songs]);
        }
        else{
            return "Data Tidak Ditemukan";
        }
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