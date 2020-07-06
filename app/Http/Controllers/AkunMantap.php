<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunMantap extends Controller
{
    function awal(){
      return view("login");
    }
    function cek(){
      echo("<script>alert(\"Login Berhasil\")</script>");
      return view("first");
    }
}
