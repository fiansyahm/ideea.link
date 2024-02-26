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

     public function wpadmin(){
        if(Auth::check()){
           return redirect('/admin/wedding/dashboard');
        }
        else{
           return redirect('/wpadmin-login');
        }
    }

     public function AdminDashboard(){
         return view('admin-wedding.dashboard');
     }

     public function AdminSearch($data){
        return redirect("/admin/wedding/list/$data");
    }

    public function AdminList($data){
        if ($data === 'all') {
            $wedding = Wedding::query();
            if ($_SERVER['HTTP_HOST'] == "ikad.in") {
                $wedding = $wedding->where('hostname', 'ikad.in');
            }
            $wedding = $wedding->paginate(10);
        } else {
            $wedding = Wedding::where('id', 'like', '%' . $data . '%')
                ->orWhere('nicknameMale', 'like', '%' . $data . '%')
                ->orWhere('nicknameFemale', 'like', '%' . $data . '%');
            
            if ($_SERVER['HTTP_HOST'] == "ikad.in") {
                $wedding = $wedding->where('hostname', 'ikad.in');
            }
    
            $wedding = $wedding->paginate(10);
        }
    
        return view('admin-wedding.list-wedding', ['wedding' => $wedding]);
    }
    
     public function AdminEdit($id){
        $host=$this->getHostnameFromURL(request());
        $minutes = 60;

         $wedding = Wedding::find($id);

         if($host->getData()->hostname=="ikad.in"){
            $catalogs = Cache::remember('catalog_data_netral', $minutes, function () {
                return Catalog::all()->where('isNetral', 1);
            });
            $songs = Cache::remember('song_data_netral', 60, function () {
                return Song::all()->where('isNetral', 1);
             });
        }
        elseif($host->getData()->hostname=="akad.in"|| $host->getData()->hostname=="127.0.0.1:8000"){
            $catalogs = Cache::remember('catalog_data', $minutes, function () {
                return Catalog::all();
            });
            $songs = Cache::remember('song_data', 60, function () {
                return Song::all();
             });
        }
         return view('admin-wedding.edit-wedding-admin',['wedding'=>$wedding,'songs'=>$songs,'catalogs'=>$catalogs]);
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

}
