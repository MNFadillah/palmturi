<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;

class AdmAlumniController extends Controller
{
    //
    public function index()
    {
        //
        $alumni = Alumni::all()->toArray();
        return view('admin.alumni', compact('alumni'));
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

    public function toCari(Request $request){
        $id=$request->get('q');
        return redirect("pencarian/$id");
    }

    public function cari($id){
        $alumni = Alumni::where('nama', 'LIKE', '%' . $id . '%')->paginate(10);
        return view('pages.listuser', compact('alumni', 'id'));
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
    public function toUpdate(Request $request){
        $id=$request->get('id');
        return $this->update($request,$id);
    }

    public function update(Request $request, $id)
    {
        //
        $alumni = Alumni::find($id);
        $alumni->nis=$request->get('nis');
        $alumni->nama=$request->get('nama');
        $alumni->nama_sekolah=$request->get('namas');
        $alumni->nama_panggilan=$request->get('namas');
        $alumni->tempat_lahir=$request->get('tpl');
        $alumni->tanggal_lahir=$request->get('tgl');
        $alumni->mulai=$request->get('mulai');
        $alumni->lulus=$request->get('lulus');
        $alumni->alamat=$request->get('alamat');
        $alumni->telp=$request->get('telp');
        $alumni->email=$request->get('email');
        $alumni->pekerjaan=$request->get('pekerjaan');
        $alumni->organisasi=$request->get('org');
        $alumni->jabatan=$request->get('jabatan');
        $alumni->alamat_org=$request->get('alamat_org');
        $alumni->telp_org=$request->get('telp_org');
        $alumni->save();
        
        return redirect('adm/alumni');
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
        $alumni = Alumni::find($id);
        unlink('img/foto/'.$alumni->foto);
        $alumni->delete();

        return redirect('/adm');
    }
}
