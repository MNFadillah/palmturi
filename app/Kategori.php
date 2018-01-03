<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey="id_kategori";
    protected $table="kategori";
    protected $fillable = [
         "id_kategori","nama","keterangan"
    ];
}
