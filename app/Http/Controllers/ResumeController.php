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
        $canido = '{
            "data": [
              {
                "name": "Graphic Design",
                "icon": "icon flaticon-layers-icon"
              },
              {
                "name": "Web Design",
                "icon": "icon flaticon-responsive-design-symbol"
              },
              {
                "name": "Photography",
                "icon": "icon flaticon-technology"
              }
            ]
          }';

          $skill = '{
            "data": [
              {
                "name": "HTML",
                "percentage": "92"
              },
              {
                "name": "CSS",
                "percentage": "60"
              },
              {
                "name": "JS",
                "percentage": "20"
              }
            ]
          }';

          $educational = '{
            "data": [
              {
                "degree": "Master Degree",
                "university": "University of Oxford",
                "year": "Jan 2015 - Dec 2017",
                "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus."
              },
                {
                    "degree": "Bachelor Degree",
                    "university": "University of Oxford",
                    "year": "Jan 2015 - Dec 2017",
                    "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus."
                }
            ]
          }';

          $working = '{
            "data": [
              {
                "position": "UI/UX",
                "company": "University of Oxford",
                "year": "Jan 2015 - Dec 2017",
                "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus."
              },
                {
                    "position": "Front End Developer",
                    "company": "University of Oxford",
                    "year": "Jan 2015 - Dec 2017",
                    "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus."
                }
            ]
          }';

         $resume = Resume::where('id', $id)
                         ->orWhere('name', $id)
                         ->first();

        // $resume->canido = $canido;
        // $resume->skill = $skill;
        // $resume->educational = $educational;
        $resume->working = $working;
        $resume->save();
 
         if ($resume) {
             $view = 'resume.theme.theme-' . $resume->theme;
             return view($view, compact('resume'));
         } else {
             // Handle jika resume tidak ditemukan
             return abort(404);
         }
     }

}
