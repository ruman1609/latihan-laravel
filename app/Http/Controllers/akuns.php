<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akuns extends Controller
{
    function masuk(Request $req){
      return view("akunMasuk", ["nama" => $req->nama, "umur" => $req->umur, "email" => $req->email]);
    }
}
