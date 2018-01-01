<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey="id_berita";
    protected $table="berita";
    protected $fillable = [
         "id_kategori","judul","konten","featured_image","created_at"
    ];
}
