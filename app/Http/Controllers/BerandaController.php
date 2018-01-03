<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Auth;

class BerandaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $ang=substr(Auth::user()->lulus, 0, 4);
        $berita = Berita::orderBy('created_at','DESC')->paginate(3);
        return view('pages.index',compact('berita','ang'));
    }
}
