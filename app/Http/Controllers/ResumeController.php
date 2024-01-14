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
                "name": "Jiwa Kepemimpinan",
                "icon": "icon flaticon-layers-icon"
              },
              {
                "name": "Komunikasi Baik",
                "icon": "icon flaticon-layers-icon"
              },
              {
                "name": "Bertanggung Jawab",
                "icon": "icon flaticon-layers-icon"
              },
              {
                "name": "Kerjasama Tim",
                "icon": "icon flaticon-layers-icon"
              },
              {
                "name": "Disiplin",
                "icon": "icon flaticon-layers-icon"
              },
              {
                "name": "Bernegosiasi",
                "icon": "icon flaticon-layers-icon"
              },
              {
                "name": "Microsoft Word",
                "icon": "icon flaticon-layers-icon"
              },
              {
                "name": "Microsoft Excel",
                "icon": "icon flaticon-layers-icon"
              },
              {
                "name": "Microsoft Power Point",
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
                    
                ]
            }';

            // {
            //   "name": "Ability to work within given quotas and timeframes using the provided briefings and feedback",
            //   "percentage": "90"
            // }
            

          $educational = '{
            "data": [
              {
                "degree": "BACHELOR OF MANAGEMENT",
                "university": "Universitas Malikussaleh, Lhokseumawe, Ace",
                "year": "Year of Graduation: 2023",
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
                    "position": "Sekretaris",
                    "company": "Pokdakan Kampung Digita",
                    "year": "Desember 2016 - Desember 2020",
                    "description": "Pokdakan kampung digital adalah oraganisasi swasembada dengan bergerak di bidang Perternakan Ikan,Wirausaha, Workshop dan Pelatihan. Berkedudukan hukum SK kementarian hukum dan HAM."
                },          
                
                {
                  "position": "Founder",
                  "company": "Ikatan Mahasiswa Binjai (Lhokseumawe",
                  "year": "November 2016 - November 2019",
                  "description": "Saya kuliah di Universitas Malikussaleh Lhokseumawe, Aceh, dan saya asal dari kota Binjai Sumatera Utara, banyak mahasiswa asal daerah Kota Binjai berkuliah di Lhokseumawe, jadi saya mendirikan organisasi ikatan mahasiswa Binjai Lhokseumawe - Aceh Utara dengan azas kekeluargaan untuk mempersatukan mahasiswa yang ada di lhokseumawe agar menjadi akrab dan solid"
                }

            ]
          }';

          // {
          //   "position": "Anggota",
          //   "company": "Pemuda Pelopor Kota Binjai 2018",
          //   "year": "Juni 2018 - Juni 2019",
          //   "description": "Menjadi pelopor anak muda untuk menjadi kreatif dan berjiwa Leadership yang di buat pemerintah dari dinas 
          //   pemuda dan olaraga untuk mengetahui potensi pemuda di kota Binjai, saya terpilih dari 10 orang kandidat dari 
          //   bidang Ketahanan pangan nasional karena saya menaungin organisasi di bidang ketahanan pangan."
          // }, 

          // {
          //   "position": "Anggota",
          //   "company": "Himpunan Mahasiswa Manajemen",
          //   "year": "September 2017 - September 2018",
          //   "description": "Himpunan Mahasiswa manajemen adalah organisasi yang terbentuk khususnya mahasiswa. Saya membidangi 
          //   divisi olaraga dan pemuda. karena latar belakang saya sebagai pelopor untuk anak muda"
          // },

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

     public function AdminEdit($id)
     {
      $resume = Resume::find($id);
      return view('admin-resume.edit-resume-admin',['resume'=>$resume]);
     }

     public function updateResume(Request $request){
      $resumeData = $request->except(['id', '_token']); // Exclude the 'id' and '_token' fields
      Resume::where('id', $request->id)->update($resumeData);
  
      // You can return a response indicating the update was successful
      return redirect()->back()->with('status', 'Data Sukses Diupdate');
  }

}
