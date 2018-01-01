<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey="id_komentar";
    protected $table="komentar";
    protected $fillable = [
         "id_berita","id_alumni","isi","created_at"
    ];
}
