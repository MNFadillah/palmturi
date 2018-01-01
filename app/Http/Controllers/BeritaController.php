<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Komentar;
use Auth;
use Carbon\Carbon;

class BeritaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $id=3;
        $berita = Berita::paginate($id);
        return view('pages.news',compact('berita','id'));
    }
    
    public function showMore(Request $request)
    {
        //
        $id = $request->get('id');
        $id=$id+3;
        $berita = Berita::paginate($id);
        return view('pages.news',compact('berita','id'));
    }
    
    public function show($id){
        $berita = Berita::find($id);
        $komentar = Komentar::where('id_berita','=',$id)->join('alumni', 'komentar.id_alumni', '=', 'alumni.id')->get();
        return view('pages.newsselect', compact('berita', 'id', 'komentar'));
    }

    public function saveComment(Request $request){
        $data=new Komentar;
        $data->id_berita=$request->get('id_berita');
        $data->id_alumni=Auth::user()->id;
        $data->isi=$request->get('isi');
        $data->created_at=Carbon::now()->toDateTimeString();
        $data->save();
        return redirect("berita/$data->id_berita");
    }
}
