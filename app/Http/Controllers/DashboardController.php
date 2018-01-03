<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;
use App\Berita;

class DashboardController extends Controller
{
    //
    public function index()
    {
        //
        $ja=Alumni::count();
        $jb=Berita::count();
        $alumni=Alumni::where('status', '<>', 1)->get();
        $jn=Alumni::where('status', '<>', 1)->count();
        return view('admin.index',compact('ja','jb','alumni','jn'));
    }
}
