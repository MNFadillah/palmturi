<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/beranda';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('pages.login');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        /*return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:alumni',
            'password' => 'required|string|min:6|confirmed',
        ]);*/
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
    }

    public function register(Request $request)
    {
        $file       = $request->file('foto');
        //$fileName   = $file->getClientOriginalName();
        $fileEx     = $file->getClientOriginalExtension();
        if($fileEx=='jpg' || $fileEx=='png') {
            $alumni=new User;
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
            $alumni->password=bcrypt($request->get('password'));
            try{
                $alumni->save();
                $newName    = $alumni->id.".".$fileEx;
                $request->file('foto')->move("img/foto", $newName);
                chmod("img/foto/$newName", 0755);
                $alumni->foto=$newName;
                $alumni->save();
                return "<script>alert('Berhasil');location.href='login';</script>";
            } 
            catch(\Exception $e){
                return "<script>alert('Gagal');location.href='register';</script>";
            }
        }
    else return "<script>alert('Gagal : File foto harus JPG atau PNG');location.href='register';</script>";
        //return redirect('/');
    }
}
