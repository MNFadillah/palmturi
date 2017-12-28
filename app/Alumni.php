<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    //
    public $timestamps = false;
    protected $table="alumni";
    protected $fillable = [
        'nis', 'nama', 'nama_sekolah', 'nama_panggilan', 'tempat_lahir', 'tanggal_lahir', 'mulai', 'lulus', 'alamat', 'telp', 'email', 'pekerjaan', 'organisasi', 'jabatan', 'alamat_org', 'telp_org', 'foto', 'password', 'namaPanggilanVis' ,
        'namaSekolahVis' ,
        'tempatLahirVis' ,
        'tanggalLahirVis' ,
        'nisVis' ,
        'angkatanVis' ,
        'alamatVis' ,
        'telpVis' ,
        'emailVis' ,
        'pekerjaanVis' ,
        'organisasiVis' ,
        'jabatanVis' ,
        'alamatOrgVis' ,
        'telpOrgVis' 
    ];
    
}