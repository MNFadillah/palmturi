<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Alumni;
use Image;

class PengaturanController extends Controller
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
        return view('pages.setting', compact('alumni','id'));
    }

    public function update(Request $request)
    {  
            $id=Auth::user()->id;
            $alumni = Alumni::find($id);
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
            
            if($request->file('foto')){
                $file       = $request->file('foto');
                //$fileName   = $file->getClientOriginalName();
                $fileEx     = $file->getClientOriginalExtension();
                if($fileEx=='jpg' || $fileEx=='png'){
                    unlink('img/foto/'.$alumni->foto);
                    $newName    = $alumni->id.".".$fileEx;
                    $file=$this->resize($file, $newName);
                    $alumni->foto=$newName;
                }
                else return "<script>alert('Gagal : File foto harus JPG atau PNG');location.href='pengaturan';</script>";
            }
            
            if($request->get('password')) $alumni->password=bcrypt($request->get('password'));
            
            $alumni->namaPanggilanVis=$this->visibleGk($request->get('switchNamaPanggilan'));
            $alumni->namaSekolahVis=$this->visibleGk($request->get('switchNamaSekolah'));
            $alumni->tempatLahirVis=$this->visibleGk($request->get('switchTempatLahir')); 
            $alumni->tanggalLahirVis=$this->visibleGk($request->get('switchTanggalLahir'));
            $alumni->nisVis=$this->visibleGk($request->get('switchNoInduk'));
            $alumni->angkatanVis=$this->visibleGk($request->get('switchMasaSekolah'));
            $alumni->alamatVis=$this->visibleGk($request->get('switchAlamatRumah'));
            $alumni->telpVis=$this->visibleGk($request->get('switchNoHp'));
            $alumni->jabatanVis=$this->visibleGk($request->get('switchJabatan'));
            $alumni->emailVis=$this->visibleGk($request->get('switchEmail'));
            $alumni->pekerjaanVis=$this->visibleGk($request->get('switchPekerjaan'));
            $alumni->organisasiVis=$this->visibleGk($request->get('switchOrganisasi'));
            $alumni->alamatOrgVis=$this->visibleGk($request->get('switchAlamat'));
            $alumni->telpOrgVis=$this->visibleGk($request->get('switchTelepon'));
            $alumni->save();
        
        return redirect('pengaturan');
    }

    private function resize($image, $nama)
    {
        try 
        {
            $extension      =   $image->getClientOriginalExtension();
            $imageRealPath  =   $image->getRealPath();
            $thumbName      =   $image->getClientOriginalName();

            //$imageManager = new ImageManager(); // use this if you don't want facade style code
            //$img = $imageManager->make($imageRealPath);

            $img = Image::make($imageRealPath); // use this if you want facade style code
            $img->resize(null, 96, function ($constraint) {
                $constraint->aspectRatio();
            });
            return $img->save(public_path('img/foto'). '/'. $nama);
        }
        catch(Exception $e)
        {
            return false;
        }
    }
    public function visibleGk($data){
        if($data) return '1';
        else return '0';
    }
}
