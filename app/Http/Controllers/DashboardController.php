<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Alumni;
use App\Berita;
use App\Admin;
use Auth;
use Image;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        //
        $ja=Alumni::count();
        $jb=Berita::count();
        $alumni=Alumni::where('status', '<>', 1)->get();
        $jn=Alumni::where('status', '<>', 1)->count();
        return view('admin.index',compact('ja','jb','alumni','jn'));
    }

    public function setting(){
        $id=Auth::user()->id;
        $data=Admin::find($id);
        return view('admin.pengaturan',compact('data'));
    }

    public function saveprof(Request $request){
        $id=Auth::user()->id;
        $data=Admin::find($id);
        $data->nama=$request->get('nama');
        $data->email=$request->get('email');
        if($request->file('foto')){
            $file       = $request->file('foto');
            //$fileName   = $file->getClientOriginalName();
            $fileEx     = $file->getClientOriginalExtension();
            if($fileEx=='jpg' || $fileEx=='png'){
                unlink('admin/img/'.$data->foto);
                $newName    = $data->id.".".$fileEx;
                $file=$this->resize($file, $newName);
                $data->foto=$newName;
            }
            else return "<script>alert('Failed : File foto harus JPG atau PNG');location.href='../../adm/setting';</script>";
        }
        
        $data->save();
        return redirect("adm/setting");
    }

    public function savepass(Request $request){
        $id=Auth::user()->id;
        $data=Admin::find($id);
        if(Hash::check($request->get('password'),$data->password)){
            if($request->get('newpass')==$request->get('cpass')){
                $data->password=Hash::make($request->get('newpass'));
                $data->save();
            }
            else return "<script>alert('Failed : Pastikan konfirmasi password');location.href='../../adm/setting';</script>";
        }
        else return "<script>alert('Failed : Masukkan password lama yang benar');location.href='../../adm/setting';</script>";
        return redirect("adm/setting");
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
            return $img->save(public_path('admin/img'). '/'. $nama);
        }
        catch(Exception $e)
        {
            return false;
        }
    }
}
