<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbController extends Controller{
  function index(){
    return view("db");
  }
  function kirim(Request $req){
    $valid = $req->validate([  // setel requirement dari datanya
      "nama" => ["required", "max:40"],
      "nim" => ["required", "min:10", "max:10"],
    ]);
    $errors = $valid->errors(); 
    $kirim = [
      "nama" => $req->nama,
      "nim" => $req->nim,
    ];
    DB::table("mhs")->insert($kirim);
    return view("dbKirim", ["nama"=>$reg->nama, "nim" => $req->nim]);
  }
}
