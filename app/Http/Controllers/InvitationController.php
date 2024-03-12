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
use App\Models\Khitan;
use App\Models\Aqiqah;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class InvitationController extends Controller
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

    public function ar(){
        return view('ar');
    }

     public function latihan(){
        return view('latihan');
     }
     public function tria(){
        return view('tria');
     }
     public function aboutus(){
        return view('invitation.aboutus');
     }

     public function listInvitation($data,$user){
        $list = null;
        if($data=="all"){
            
        }
        elseif($data=="wedding"){
            // buat pencarian tanpa memperhatikan huruf besar kecil
            $list = Wedding::whereRaw('LOWER(fullnameMale) = ?', strtolower($user))->first();
            // atau
            // $list = Wedding::whereRaw('LOWER(fullnameMale) = ?', [strtolower($user)])->first();
        }
        elseif($data=="khitan"){
            $list = Khitan::whereRaw('LOWER(fullname) = ?', strtolower($user))->first();
        }
        elseif($data=="aqiqah"){
            $list = Aqiqah::whereRaw('LOWER(fullname) = ?', strtolower($user))->first();
        }
        // return ['list'=>$list,'data'=>$data,'id'=>$id,'user'=>$user];
        return view('invitation.list-invitation',['list'=>$list,'data'=>$data,'user'=>$user]);
    }


     public function wedding(){
        $catalogs = Cache::remember('catalog_data', 60, function () {
            return Catalog::all();
        });
        $host=$this->getHostnameFromURL(request());
        if($host->getData()->hostname=="ikad.in"){
            return view('invitation.wedding-muslim',['androidpic'=>'https://i.ibb.co/BVN8H0t/muslim-couple-png-for-andorid.png','catalogs'=>$catalogs]);    
        }
        elseif($host->getData()->hostname=="akad.in"|| $host->getData()->hostname=="127.0.0.1:8000"){
            return view('invitation.wedding',['androidpic'=>'https://i.ibb.co/prtTWBW/Group-3.png','catalogs'=>$catalogs]);
        }
        else{
            return "URL Maintenance";
        }

     }

     public function share($platform){
        $catalogs = Cache::remember('catalog_data', 60, function () {
            return Catalog::all();
        });
        return view('invitation.wedding',['androidpic'=>'https://i.ibb.co/prtTWBW/Group-3.png','platform'=>$platform,'catalogs'=>$catalogs]);
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

     public function katalog($type)
    {
        // get json data from another link
        $link='https://akad.in/json/katalog/'.$type;
        $response = Http::get($link);
        return view('invitation.katalog', ['data' => $response->json()]);
    }

    public function json_katalog($type)
    {
        $host=$this->getHostnameFromURL(request());
        $minutes = 60;
        if($host->getData()->hostname=="ikad.in"){
            $catalogs = Cache::remember('catalog_data_netral', $minutes, function () {
                return Catalog::all()->where('isNetral', 1);
            });
        }
        elseif($host->getData()->hostname=="akad.in"|| $host->getData()->hostname=="127.0.0.1:8000"){
            $catalogs = Cache::remember('catalog_data', $minutes, function () {
                return Catalog::all();
            });
        }

        $catalogs_web_data=array();
        foreach($catalogs as $catalog){
            if($catalog->type==$type&&$catalog->media=="web"){
                array_push($catalogs_web_data,$catalog);
            }
        }

        $catalogs_video_data=array();
        foreach($catalogs as $catalog){
            if($catalog->type==$type&&$catalog->media=="video"){
                array_push($catalogs_video_data,$catalog);
            }
        }

        $catalogs_filter_data=array();
        foreach($catalogs as $catalog){
            if($catalog->type==$type&&$catalog->media=="filter"){
                array_push($catalogs_filter_data,$catalog);
            }
        }
        return ['catalogs' => $catalogs,'catalogs_web_data'=>$catalogs_web_data,'catalogs_video_data'=>$catalogs_video_data,'catalogs_filter_data'=>$catalogs_filter_data];
    }

    public function sosmed(){
        return view('invitation.sosmed');
    }


     public function contohWedding(){
        return view('invitation.contoh-wedding');
     }
    

}

