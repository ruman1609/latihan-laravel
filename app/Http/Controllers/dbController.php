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
      "nama" => ["required", "regex:/^[\pL\s\-]+$/u", "max:40"],
      "nim" => ["required", "size:10"],
    ]);
    DB::insert("insert into mhs(nama, nim) values (?,?)", [$req->nama, $req->nim]);  // kurang lebih seperti java
    return view("dbKirim", ["nama"=>$req->nama, "nim" => $req->nim]);
  }
  function liat(){
    // $data = DB::select("select * from mhs"); cara lama dan kurang efektif
    $data = DB::table("mhs")->paginate(5);
    return view("dbLihat", ["data"=>$data]);
  }
  function cari(Request $req){
    // $data = DB::select("select * from mhs where nama like ?", ["%".$req->nama."%"]); cara lama
    $data = DB::table("mhs")
            ->where("nama", "like", "%$req->nama%")
            ->paginate(5);
    return view("dbLihat", ["data"=>$data]);
  }
  function edit(Request $req, $nim){
    DB::update("update mhs set nama=? where nim=?",[$req->nama, $nim]);
    return "Update $nim Berhasil";
  }
  function delete($nim){
    DB::delete("delete from mhs where nim=?",[$nim]);
    return "delete $nim berhasil";
  }
}
