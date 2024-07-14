<?php

namespace App\Http\Controllers;
use App\Models\Ideelink;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;


class IdeelinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function registerIdeelink(){
        return view('ideelink.register-ideelink');
     }

     public function showIdeelink($id)
     {
        

         $ideelink = Ideelink::where('id', $id)
                         ->orWhere('name_account', $id)
                         ->first();
         if ($ideelink) {
             $view = 'ideelink.theme.theme-' . $ideelink->theme;
             return view($view, compact('ideelink'));
         } else {
             // Handle jika ideelink tidak ditemukan
             return abort(404);
         }
     }

     public function updateResume(Request $request){
      $resumeData = $request->except(['id', '_token']); // Exclude the 'id' and '_token' fields
      
      Resume::where('id', $request->id)->update($resumeData);
  
      // You can return a response indicating the update was successful
      return redirect()->back()->with('status', 'Data Sukses Diupdate');
  }

  public function addIdeelink(Request $request){
    $ideelinkData = $request->except(['id', '_token']); // Exclude the 'id' and '_token' fields
    Ideelink::create($ideelinkData);
    $id = DB::table('ideelinks')->where('name_account', $request->name_account)->latest('id')->value('id');
    $redirect="list-ideelink/$id";
    // You can return a response indicating the update was successful
    return redirect($redirect)->with('status', 'Data Sukses Ditambahkan');
  }

  public function listIdeelink($id){
    $ideelink = Ideelink::where('id', $id)
                     ->orWhere('name_account', $id)
                     ->first();
    return view('ideelink.list-ideelink',['ideelink'=>$ideelink]);
  }

  public function UserEdit($id, $name){
      // $name1 = ucwords($nickname);
      $name1 = $name;
      $ideelink = Ideelink::all()->where('id', $id)->where('name_account', $name1);
      if(count($ideelink)>0){
      // nanti diganti ya,buatin sendiri
          $ideelink = Ideelink::all()->where('id', $id)->first();
          return view('admin-ideelink.edit-ideelink-user',['ideelink'=>$ideelink]);
      }
      else{
          return "Data Tidak Ditemukan";
      }
  }

  public function updateIdeelink(Request $request){
      $ideelinkData = $request->except(['id', '_token']); // Exclude the 'id' and '_token' fields
      
      Ideelink::where('id', $request->id)->update($ideelinkData);

      // You can return a response indicating the update was successful
      return redirect()->back()->with('status', 'Data Sukses Diupdate');
  }

  public function AdminSearch($data){
    return redirect("/admin/ideelink/list/$data");
}

  public function AdminList($data)
  {
      if ($data === 'all') {
          $ideelink = Ideelink::query();
          $ideelink = $ideelink->paginate(10);
      } else {
          $ideelink = Ideelink::where('id', 'like', '%' . $data . '%')
              ->orWhere('name_account', 'like', '%' . $data . '%');
          $ideelink = $ideelink->paginate(10);
      }

      return view('admin-ideelink.list-ideelink', ['ideelink' => $ideelink]);
  }

 public function AdminEdit($id){
    $ideelink = Ideelink::find($id);
    return view('admin-ideelink.edit-ideelink-admin',['ideelink'=>$ideelink]);
 }

 public function AdminDelete($id){
     $ideelink = Cache::remember('ideelink_' . $id, 60, function () use ($id) {
        return Ideelink::find($id);
     });
     if(Auth::check()&& Auth::user()->isAdmin=='1'){
        $ideelink->delete();
        return redirect()->back()->with('status', 'Data Sukses Dihapus');
     }
     else{
        return redirect()->back()->with('status', 'Data Gagal Dihapus');
     }
  }

}
