<?php

namespace App\Http\Controllers;
use App\Models\Aqiqah;
use App\Models\Confirmationaqiqah;
use App\Models\confirmationkhitan;
use App\Models\Khitan;
use App\Models\Theme;
use App\Models\Wedding;
use App\Models\Confirmation;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dewitojabir(){
         $id=22;
         $wedding = Wedding::all()->where('id', $id)->first();
         $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
         $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
         $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
         $totalcomments=$hadir+$tidakhadir+$raguhadir;
         return view('request.dewi-jabir',['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments]);
    }
    public function confirmationWedding(Request $request){
      $request->validate([
         "id-couple" => 'required',
         "guest-name" => 'required',
         "ucapan-wedding" => 'required',
         "confirmation-attendance" => 'required',
      ]);
      Confirmation::create([
         "id-couple" => 22,
         "guest-name" => $request->input('guest-name'),
         "ucapan-wedding" => $request->input('ucapan-wedding'),
         "confirmation-attendance" => $request->input('confirmation-attendance'),
      ]);
      $idcouple=$request->input('id-couple');
      $redirect="wedding/dewi-jabir";
      return redirect($redirect)->with('status', 'Data Sukses Ditambah');
    }

    public function luthfitoichwan($guest){
        $id=29;
        $wedding = Wedding::all()->where('id', $id)->first();
         $theme = Theme::all()->where('code', $wedding->theme)->sortBy("sequence");
         $image_themes=array();
         foreach($theme as $t){
             $image_themes[$t->sequence]=$t->url;
         }
         $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
         $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
         $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
         $totalcomments=$hadir+$tidakhadir+$raguhadir;
         return view('request.luthfi-ichwan',['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'image_themes'=>$image_themes]);
     }

     public function indriari($guest){
        $id=102;
        $wedding = Wedding::all()->where('id', $id)->first();
         $theme = Theme::all()->where('code', $wedding->theme)->sortBy("sequence");
         $image_themes=array();
         foreach($theme as $t){
             $image_themes[$t->sequence]=$t->url;
         }
         $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
         $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
         $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
         $totalcomments=$hadir+$tidakhadir+$raguhadir;
         return view('request.indri-ari',['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'image_themes'=>$image_themes]);
     }

     public function khakimtoika($guest){
        $id=103;
        $wedding = Wedding::all()->where('id', $id)->first();
         $theme = Theme::all()->where('code', $wedding->theme)->sortBy("sequence");
         $image_themes=array();
         foreach($theme as $t){
             $image_themes[$t->sequence]=$t->url;
         }
         $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
         $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
         $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
         $totalcomments=$hadir+$tidakhadir+$raguhadir;
         return view('request.khakim-ika',['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'image_themes'=>$image_themes]);
     }

     public function febrinovia($guest){
        $id=130;
        $wedding = Wedding::all()->where('id', $id)->first();
         $theme = Theme::all()->where('code', $wedding->theme)->sortBy("sequence");
         $image_themes=array();
         foreach($theme as $t){
             $image_themes[$t->sequence]=$t->url;
         }
         $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
         $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
         $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
         $totalcomments=$hadir+$tidakhadir+$raguhadir;
         return view('request.febri-novia',['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'image_themes'=>$image_themes]);
     }

     public function anggatorizki($guest){
        $id=135;
        $wedding = Wedding::all()->where('id', $id)->first();
        $theme = Theme::all()->where('code', $wedding->theme)->sortBy("sequence");
        $image_themes=array();
        foreach($theme as $t){
            $image_themes[$t->sequence]=$t->url;
        }
        $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
        $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
        $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
        $totalcomments=$hadir+$tidakhadir+$raguhadir;
        return view('request.angga-rizki',['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'image_themes'=>$image_themes]);
     }

     public function banitoasnawi(){
        return view('request.bani-asnawi',[]);
     }

     public function odedtoayang($guest){
        $id=159;
        $wedding = Wedding::all()->where('id', $id)->first();
        $theme = Theme::all()->where('code', $wedding->theme)->sortBy("sequence");
        $image_themes=array();
        foreach($theme as $t){
            $image_themes[$t->sequence]=$t->url;
        }
        $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
        $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
        $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
        $totalcomments=$hadir+$tidakhadir+$raguhadir;
        return view('request.oded-ayang',['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'image_themes'=>$image_themes]);
     }

     public function kholidtosari($guest){
        $id=170;
        $wedding = Wedding::all()->where('id', $id)->first();
        $theme = Theme::all()->where('code', $wedding->theme)->sortBy("sequence");
        $image_themes=array();
        foreach($theme as $t){
            $image_themes[$t->sequence]=$t->url;
        }
        $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
        $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
        $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
        $totalcomments=$hadir+$tidakhadir+$raguhadir;
        return view('request.kholid-sari',['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'image_themes'=>$image_themes]);
     }

     public function anatorizki($id,$guest){
        $wedding = Wedding::all()->where('id', $id)->first();
        $theme = Theme::all()->where('code', $wedding->theme)->sortBy("sequence");
        $image_themes=array();
        foreach($theme as $t){
            $image_themes[$t->sequence]=$t->url;
        }
        $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
        $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
        $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
        $totalcomments=$hadir+$tidakhadir+$raguhadir;
        return view('request.ana-rizki',['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest, 'image_themes'=>$image_themes]);
     }
     public function undangan($couple,$id,$guest){
        $view="request.$couple";
        $wedding = Wedding::all()->where('id', $id)->first();
        $hadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 0)->count();
        $tidakhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 1)->count();
        $raguhadir=Confirmation::all()->where('id-couple', $id)->where('confirmation-attendance', 2)->count();
        $totalcomments=$hadir+$tidakhadir+$raguhadir;
        return view($view,['wedding'=>$wedding,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest]);
     }

     public function invitation($type,$couple,$id,$guest){
        $view="request.$couple";
        if($type=="wedding"){
            $data = Wedding::all()->where('id', $id)->first();
            $confirmation=Confirmation::all()->where('id-couple', $id);
        }elseif($type=="khitan"){
            $data = Khitan::all()->where('id', $id)->first();
            $confirmation=confirmationkhitan::all()->where('id-couple', $id);
        }elseif($type=="aqiqah"){
            $data = Aqiqah::all()->where('id', $id)->first();
            $confirmation=Confirmationaqiqah::all()->where('id-couple', $id);
        }
        $hadir=$confirmation->where('confirmation-attendance', 0)->count();
        $tidakhadir=$confirmation->where('confirmation-attendance', 1)->count();
        $raguhadir=$confirmation->where('confirmation-attendance', 2)->count();
        $totalcomments=$hadir+$tidakhadir+$raguhadir;
        return view($view,['data'=>$data,'hadir'=>$hadir,'tidakhadir'=>$tidakhadir,'raguhadir'=>$raguhadir,'totalcomments'=>$totalcomments, 'guest'=>$guest,'komentar'=>$confirmation]);
     }

     public function harisantritulungagung(){
        return view('request.harisantritulungagung',[]);
     }

}
