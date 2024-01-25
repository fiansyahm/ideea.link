<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use App\Models\Page;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FlipbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
        return view('flipbook.index');
     }

     public function defaultBook(){
        return view('flipbook.default-book-view');
     }


}
