<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function registerResume(){
        return view('resume.register-resume');
     }

     public function personalProfile($id)
     {
         $resume = Resume::where('id', $id)
                         ->orWhere('name', $id)
                         ->first();
 
         if ($resume) {
             $view = 'resume.theme.theme-' . $resume->theme;
             return view($view, compact('resume'));
         } else {
             // Handle jika resume tidak ditemukan
             return abort(404);
         }
     }

}
