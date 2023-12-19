<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Wedding;
use App\Models\Confirmation;
use App\Models\Page;
use App\Models\Catalog;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::all();
        return view('catalog.index', ['catalogs' => $catalogs]);
    }
    public function create(){
        return view('catalog.create');
    }
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...

        $catalogs = new Catalog;

        $catalogs->name = $request->name;
        $catalogs->description = $request->description;
        $catalogs->url = $request->url;
        $catalogs->image = $request->image;
        $catalogs->code = $request->code;
        $catalogs->harga_setelah_diskon = $request->harga_setelah_diskon;
        $catalogs->peringkat = $request->peringkat;
        $catalogs->bintang = $request->bintang;

        $catalogs->save();

        return redirect('/catalog');
    }

    public function delete($id){
        $catalogs = Catalog::find($id);
        $catalogs->delete();
        return redirect('/catalog')->with('status', 'Data berhasil dihapus');
    }

    public function edit($id){
        $catalog = Catalog::find($id);
        return view('catalog.edit', ['catalog' => $catalog]);
    }

    public function update(Request $request, $id)
    {
        $catalog = $request->except(['id', '_token']); // Exclude the 'id' and '_token' fields

        Catalog::where('id', $request->id)->update($catalog);

        // You can return a response indicating the update was successful
        return redirect()->back()->with('status', 'Data Sukses Diupdate');
    }

    public function show($id){
        $catalog = Catalog::find($id);
        return view('catalog.show', ['catalog' => $catalog]);
    }
}
