<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $alumni = Alumni::all()->toArray();
        return view('pages.listuser', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestuest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file       = $request->file('foto');
        $fileName   = $file->getClientOriginalName();
        $fileEx     = $file->getClientOriginalExtension();
        $newName    = $request->get('nis').".".$fileEx;
        $alumni=new Alumni;
        $alumni->nis=$request->get('nis');
        $alumni->nama=$request->get('nama');
        $alumni->nama_sekolah=$request->get('nama_sekolah');
        $alumni->nama_panggilan=$request->get('nama_panggilan');
        $alumni->tempat_lahir=$request->get('tempat_lahir');
        $alumni->tanggal_lahir=$request->get('tanggal_lahir');
        $alumni->mulai=$request->get('mulai');
        $alumni->lulus=$request->get('lulus');
        $alumni->alamat=$request->get('alamat');
        $alumni->telp=$request->get('telp');
        $alumni->email=$request->get('email');
        $alumni->pekerjaan=$request->get('pekerjaan');
        $alumni->organisasi=$request->get('organisasi');
        $alumni->jabatan=$request->get('jabatan');
        $alumni->alamat_org=$request->get('alamat_org');
        $alumni->telp_org=$request->get('telp_org');
        $alumni->foto=$request->get('nis').".".$fileEx;
        $alumni->password=bcrypt($request->get('password'));  
        $alumni->save();
        $request->file('foto')->move("img/foto", $alumni->nis.".".$fileEx);
        chmod("img/foto/$newName", 0755);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $alumni = Alumni::find($id);
        $alumni->mulai=substr($alumni->mulai, 0, 4);
        $alumni->lulus=substr($alumni->lulus, 0, 4);
        return view('pages.profile', compact('alumni','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestuest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $requestuest, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
