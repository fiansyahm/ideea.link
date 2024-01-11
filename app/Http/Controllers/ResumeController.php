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
                "name": "2D ANIMATION",
                "icon": "icon flaticon-layers-icon"
              }
              
            ]
          }';
              // ,
              // {
              //   "name": "Web Design",
              //   "icon": "icon flaticon-responsive-design-symbol"
              // },
              // {
              //   "name": "Photography",
              //   "icon": "icon flaticon-technology"
              // }

              $skill = '{
                "data": [
                    {
                        "name": "3 years of experience as an animator 2D",
                        "percentage": "100"
                    },
                    {
                        "name": "Experience in rigged animation using Toon Boom Harmony",
                        "percentage": "100"
                    },
                    {
                        "name": "Ability to work in a fast-paced and highly creative series environment",
                        "percentage": "100"
                    },
                    {
                        "name": "Strong understanding of 2D animation principles and perspective",
                        "percentage": "80"
                    },
                    {
                        "name": "Experience in animation strong, expressive poses and facial expressions",
                        "percentage": "90"
                    },
                    {
                        "name": "High attention and care for detail",
                        "percentage": "95"
                    },
                    {
                        "name": "Ability to adapt to different styles",
                        "percentage": "85"
                    },
                    {
                        "name": "Excellent time management skills and ability to prioritize work",
                        "percentage": "90"
                    },
                    {
                        "name": "Ability to work within given quotas and timeframes using the provided briefings and feedback",
                        "percentage": "90"
                    }
                ]
            }';
            

          $educational = '{
            "data": [
              {
                "degree": "BACHELOR OF THEATRE PERFORMING ARTS",
                "university": "Indonesian Institute of The Arts",
                "year": "Year of Graduation: 2020",
                "description": ""
              }
            ]
          }';

          // {
          //   "degree": "Bachelor Degree",
          //   "university": "University of Oxford",
          //   "year": "Jan 2015 - Dec 2017",
          //   "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus."
          // }

          $working = '{
            "data": [
      
                {
                    "position": "PETER AND THE WOLF",
                    "company": "RUSSIA",
                    "year": "2018 - 2022",
                    "description": ""
                },

                {
                  "position": "KID E CATS THE MOVIE",
                  "company": "RUSSIA",
                  "year": "2021 - 2022",
                  "description": ""
                },           
                
                {
                  "position": "IMAGO",
                  "company": "FRENCH",
                  "year": "2021",
                  "description": ""
                },

                {
                  "position": "PUFFY WORLD",
                  "company": "-",
                  "year": "2023",
                  "description": ""
                },

                {
                  "position": "NUZO AND NAMIA",
                  "company": "AFRICA",
                  "year": "2023",
                  "description": ""
                },

                {
                  "position": "TWEENDE",
                  "company": "-",
                  "year": "2023",
                  "description": ""
                },

                {
                  "position": "HIT-MONKEY",
                  "company": "-",
                  "year": "2023",
                  "description": ""
                }

            ]
          }';

          // {
          //   "position": "UI/UX",
          //   "company": "University of Oxford",
          //   "year": "Jan 2015 - Dec 2017",
          //   "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus."
          // },

         $resume = Resume::where('id', $id)
                         ->orWhere('nickname', $id)
                         ->first();

        // $resume->canido = $canido;
        // $resume->skill = $skill;
        // $resume->educational = $educational;
        // $resume->working = $working;
        // $resume->save();
 
         if ($resume) {
             $view = 'resume.theme.theme-' . $resume->theme;
             return view($view, compact('resume'));
         } else {
             // Handle jika resume tidak ditemukan
             return abort(404);
         }
     }

}
