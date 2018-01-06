<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $table="alumni";
    protected $fillable = [
        'nis', 'nama', 'nama_sekolah', 'nama_panggilan', 'tempat_lahir', 'tanggal_lahir', 'mulai', 'lulus', 'alamat', 'telp', 'email', 'pekerjaan', 'organisasi', 'jabatan', 'alamat_org', 'telp_org', 'foto', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token'
    ];
}
