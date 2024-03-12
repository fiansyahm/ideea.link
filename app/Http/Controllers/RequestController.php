<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function myprofile($file,$id){
        $view="request.$file";
        
        $data = Resume::all()->where('id', $id)->first();
          
        return view($view,compact('data'));
     }


}
