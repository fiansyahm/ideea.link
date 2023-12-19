<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Wedding;
use App\Models\Confirmation;
use App\Models\Page;
use App\Models\Song;
use App\Models\Pendingpayment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PendingpaymentController extends Controller
{
    public function index()
    {
        $pendingpayments = Pendingpayment::all();
        return view('pendingpayment.index', ['pendingpayment' => $pendingpayments]);
    }

    public function delete($id)
    {
        $pendingpayments = Pendingpayment::find($id);
        // delete wedding id
        Wedding::all()->where('id', $pendingpayments->id_invitation)->first()->delete();
        // delete pending payment
        $pendingpayments->delete();
        return redirect('/pendingpayment')->with('status', 'Data berhasil dihapus');
    }

    public function accept($id)
    {
        $pendingpayments = Pendingpayment::find($id);
        // delete pending payment
        $pendingpayments->delete();
        return redirect('/pendingpayment')->with('status', 'Data berhasil diaccept');
    }

    public function show($id){
        $pendingpayments = Pendingpayment::find($id);
        return view('pendingpayment.show', ['video' => $pendingpayments]);
    }
}
