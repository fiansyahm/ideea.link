<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Add this import statement
use App\Models\User;

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Code;

class CodeController extends Controller
{
    public function index()
    {
        $code=Code::all();
        return view('code.index', compact('code'));
    }

    public function create()
    {
        // make random code using date and random number
        for($i=0; $i<10; $i++){   
            $code = date('Ymd').rand(1000,9999);
            Code::create([
                'kode' => $code,
            ]);
        }
        return redirect('/code')->with('status', 'Data berhasil ditambahkan');
    }   

    public function delete($redeem)
    {
        $code=Code::all()->where('kode',$redeem)->first();
        $code->delete();
        return redirect('/code')->with('status', 'Data berhasil dihapus');
    }

    public function update($id)
    {
        $code=Code::find($id);
        $code->update([
            'status' => 0,
        ]);
        return redirect('/code')->with('status', 'Data berhasil diupdate');
    }

}

