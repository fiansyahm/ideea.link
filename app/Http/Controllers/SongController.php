<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Wedding;
use App\Models\Confirmation;
use App\Models\Page;
use App\Models\Song;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('song.index', ['songs' => $songs]);
    }
    public function create()
    {
        return view('song.create');
    }
    public function store(Request $request)
    {

        $songName = 'url' . $request->name;
        // audio
        if ($request->hasFile('url')) {
            $song = $request->file('url');
            $song->storeAs('public/song', $songName); // Store the so$song in the storage/app/public/so$songs directory
            // get original root url
            $url = '/storage/song/' . $songName;
        }
        else{
            return 'No file selected';
        }

        $song = new Song();
        $song->name = $request->name;
        $song->url = $url;
        $song->save();
        
        return redirect('/song')->with('status', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $song = Song::find($id);
        // delete $image->storeAs('public/song', $imageName);
        $songName ='url' .  $song ->name;
        Storage::delete('public/song/' . $songName);
        $song->delete();
        return redirect('/song')->with('status', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $song = Song::find($id);
        return view('song.edit', ['song' => $song]);
    }


    public function update(Request $request, $id)
    {
        // Retrieve the song data by ID
        $song = Song::find($id);
       
        // Remove old song
        $oldSongName = 'url' .  $song ->name; // Assuming 'name' holds the file name
        Storage::delete('public/song/' . $oldSongName);

        // Upload new song
        if ($request->hasFile('url')) {
            $uploadedSong = $request->file('url');
            $songName = 'url' . $request->name; // You might want to modify the way you get the song name

            $uploadedSong->storeAs('public/song', $songName); // Store the new song in storage/app/public/song directory
            $url = '/storage/song/' . $songName;

            // Update song details
            $song->name = $request->name;
            $song->url = $url;
            $song->save();

            // You can return a response indicating the update was successful
            return redirect()->back()->with('status', 'Data Sukses Diupdate');
        } else {
            return 'No file selected';
        }
    }

}
