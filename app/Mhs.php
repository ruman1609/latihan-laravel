<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    protected $table="mhs";  // deklarasi tabel
    // protected $primaryKey="nim";  // deklarasi kolom primaryKey
    // protected $keyType="string"  // deklarasi tipe primary key
    public $timestamps=false;  // deklarasi kalau timestamps nda dipake
    protected $fillable=["nim", "nama"];
    // protected $hidden=["nama"];  // buat sembunyikan
}
