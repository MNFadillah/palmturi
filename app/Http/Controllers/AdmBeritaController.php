<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori;
use App\Komentar;
use Image;
use Carbon\Carbon;

class AdmBeritaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        //
        $berita = Berita::orderBy('created_at','DESC')->join('kategori', 'kategori.id_kategori', '=', 'berita.id_kategori')->get();
        return view('admin.berita',compact('berita'));
    }
    
    public function create()
    {
        $kat = Kategori::orderBy('nama','ASC')->get();
        return view('admin.inputberita',compact('kat'));
    }

    public function store(Request $request)
    {
        //
        $file       = $request->file('gambar');
        $fileEx     = $file->getClientOriginalExtension();
        if($fileEx=='jpg' || $fileEx=='png') {
            $berita=new Berita;
            $berita->judul=$request->get('judul');
            $berita->konten=$request->get('editor1');
            $berita->id_kategori=$request->get('kategori');
            $berita->created_at=Carbon::now()->toDateTimeString();
            try{
                $berita->save();
                $newName    = $berita->id_berita.".".$fileEx;
                $file=$this->resize($file, $newName);
                chmod("img/berita/$newName", 0755);
                $berita->featured_image=$newName;
                $berita->save();
                return redirect('adm/berita');
            } 
            catch(\Exception $e){
                $a=$e->getMessage()." tes";
                return "<script>alert($a);location.href='adm/berita/create';</script>";
            }
        }
        else return "<script>alert('Gagal : File gambar harus JPG atau PNG');location.href='adm/berita/create';</script>";
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
            $img->resize(400, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            return $img->save(public_path('img/berita'). '/'. $nama);
        }
        catch(Exception $e)
        {
            return false;
        }
    }

    public function edit($id)
    {
        //
        $berita = Berita::find($id);
        $kat = Kategori::orderBy('nama','ASC')->get();
        return view('admin.editberita', compact('berita', 'id','kat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestuest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $berita = Berita::find($id);
        $berita->judul=$request->get('judul');
        $berita->konten=$request->get('editor1');
        $berita->id_kategori=$request->get('kategori');
        if($request->file('gambar')){
            $file       = $request->file('gambar');
            //$fileName   = $file->getClientOriginalName();
            $fileEx     = $file->getClientOriginalExtension();
            if($fileEx=='jpg' || $fileEx=='png'){
                unlink('img/berita/'.$berita->featured_image);
                $newName    = $berita->id_berita.".".$fileEx;
                $file=$this->resize($file, $newName);
                $berita->featured_image=$newName;
            }
            else return "<script>alert('Gagal : File foto harus JPG atau PNG');</script>";
        }
        $berita->save();
        return redirect('adm/berita');
    }

    public function delete(Request $request)
    {
        $id=$request->get('id');
        return $this->destroy($id);
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
        $berita = Berita::find($id);
        unlink('img/berita/'.$berita->featured_image);
        $komentar=Komentar::where('id_berita','=',$berita->id_berita);
        $komentar->delete();
        $berita->delete();

        return redirect('adm/berita');
    }
}
