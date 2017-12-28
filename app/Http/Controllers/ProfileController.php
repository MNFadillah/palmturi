<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Alumni;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $id=Auth::user()->id;
        $alumni = Alumni::find($id);
        $alumni->mulai=substr($alumni->mulai, 0, 4);
        $alumni->lulus=substr($alumni->lulus, 0, 4);
        $alumni->tanggal_lahir=date('d F Y', strtotime($alumni->tanggal_lahir));
        return view('pages.profile', compact('alumni'));
    }
}
