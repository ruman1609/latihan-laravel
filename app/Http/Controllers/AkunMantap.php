<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Pengguna;

class AkunMantap extends Controller
{
    function awal(){
      return view("login");
    }
    function cek(Request $req){
      echo("<script>alert(\"Login Berhasil\")</script>");
      return redirect("/middletest/akun/".$req->user);
    }
    function daftar(Request $req){
      $user = $req->user;
      $pass = Hash::make($req->pass);
      while(Hash::needsRehash($pass)){$pass = Hash::make($req->pass);}
      $pengguna = new Pengguna;
      $pengguna->user = $user;
      $pengguna->pass = $pass;
      $pengguna->save();
      return redirect("/middletest")->with("daftar", "Daftar Berhasil\\nSilahkan Login");
    }
    function masuk($user){
      return view("first", ["user"=>$user]);
    }
}
