<?php

namespace App\Http\Controllers;

use App\Models\Confirmation;
use App\Models\Confirmationkhitan;
use App\Models\Confirmationaqiqah;

class ConfirmationController extends Controller
{
    public function konfirmasi($type){
        if($type=="wedding"){
            $konfirmasi= Confirmation::all();
        }
        else if($type=="khitan"){
            $konfirmasi= Confirmationkhitan::all();
        }
        else if($type=="aqiqah"){
            $konfirmasi= Confirmationaqiqah::all();
        }
        $view="admin-{$type}.konfirmasi.index";
        return view ($view,['konfirmasi'=>$konfirmasi]);
    }
     public function delete($type,$id){
        $konfirmasi="";
        if($type=="wedding"){
            $konfirmasi= Confirmation::all()->where('id', $id)->first();
        }
        else if($type=="khitan"){
            $konfirmasi= Confirmationkhitan::all()->where('id', $id)->first();
        }
        else if($type=="aqiqah"){
            $konfirmasi= Confirmationaqiqah::all()->where('id', $id)->first();
        }
        $konfirmasi->delete();
        return redirect()->back()->with('status', 'Data Sukses Dihapus');
    }
}