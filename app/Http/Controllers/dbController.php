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
      "nama" => ["required", "alpha", "max:40"],
      "nim" => ["required", "min:10", "max:10"],
    ]);
    DB::insert("insert into mhs(nama, nim) values (?,?)", [$req->nama, $req->nim]);  // kurang lebih seperti java
    return view("dbKirim", ["nama"=>$req->nama, "nim" => $req->nim]);
  }
  function liat(){
    $data = DB::select("select * from mhs");
    return view("dbLihat",["data"=>$data]);
  }
}
