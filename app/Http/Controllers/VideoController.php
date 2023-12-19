<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Wedding;
use App\Models\Confirmation;
use App\Models\Page;
use App\Models\Video;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('video.index', ['videos' => $videos]);
    }
    public function create(){
        return view('video.create');
    }
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...

        $videos = new Video;

        $videos->name = $request->name;
        $videos->url = $request->url;

        $videos->save();

        return redirect('/video');
    }

    public function delete($id){
        $videos = Video::find($id);
        $videos->delete();
        return redirect('/video')->with('status', 'Data berhasil dihapus');
    }

    public function edit($id){
        $video = Video::find($id);
        return view('video.edit', ['video' => $video]);
    }

    public function update(Request $request, $id)
    {
        $video = $request->except(['id', '_token']); // Exclude the 'id' and '_token' fields

        Video::where('id', $request->id)->update($video);

        // You can return a response indicating the update was successful
        return redirect()->back()->with('status', 'Data Sukses Diupdate');
    }

    public function show($id){
        $video = Video::find($id);
        return view('video.show', ['video' => $video]);
    }
}
