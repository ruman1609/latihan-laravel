<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mhs;

class dbController extends Controller{
  function index(){
    return view("db");
  }
  function kirim(Request $req){
    try {
      $valid = $req->validate([  // setel requirement dari datanya
        "nama" => ["required", "regex:/^[\pL\s\-]+$/u", "max:40"],
        "nim" => ["required", "size:10"],
      ]);
      DB::insert("insert into mhs(nama, nim) values (?,?)", [$req->nama, $req->nim]);  // kurang lebih seperti java
      return redirect("/dbTutor")->with("msg", "Data telah dikirim\\nNama: ".$req->nama."\\nNIM: ".$req->nim);  // pake \\n biar enter kalau di sini
    } catch (\Exception $e) {
      return back()->withError("Terjadi kesalahan, error code: ".$e->getCode())->withInput();
    }

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
    return redirect("/dbTutor/liat")->with("msg", "Update NIM ".$nim." Berhasil");
  }
  function delete($nim){
    DB::delete("delete from mhs where nim=?",[$nim]);
    return redirect("/dbTutor/liat")->with("msg", "Delete NIM ".$nim." Berhasil");
  }

  function test(){
    $mhs = Mhs::all();
    return $mhs;
  }
}
