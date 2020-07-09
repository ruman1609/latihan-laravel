<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = "pengguna";
    protected $fillable = ["user", "pass"];
    public $timestamps = false;
    protected $primaryKey = "user";
    protected $keytype = "string";
}
