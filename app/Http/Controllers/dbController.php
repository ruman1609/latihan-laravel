<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException as QE;
use App\Mhs;

class dbController extends Controller{
  function index(){
    return view("db");
  }
  function kirim(Request $req){
    DB::beginTransaction();  // sama seperti indexedDB biar nda error kalau jaringan terputus
    try {
      $valid = $req->validate([  // setel requirement dari datanya
        "nama" => ["required", "regex:/^[\pL\s\-]+$/u", "max:40"],
        "nim" => ["required", "size:10"],
      ]);
      Mhs::insert(["nama"=>$req->nama, "nim"=>$req->nim]);  // eloquent harus make query builder
      // DB::insert("insert into mhs(nama, nim) values (?,?)", [$req->nama, $req->nim]);  // kurang lebih seperti java
      DB::commit();  // untuk meyakinkan bahwa data sudah masuk
      return redirect("/dbTutor")->with("msg", "Data telah dikirim\\nNama: ".$req->nama."\\nNIM: ".$req->nim);  // pake \\n biar enter kalau di sini
    } catch (QE $e) {
      DB::rollback();  // menghapus transaksi jika terjadi error jaringan
      return back()->with("dbError", "NIM sudah terdaftar")->withInput();
    }

  }
  function liat(){
    DB::beginTransaction();
    try {
      // $data = DB::select("select * from mhs");  // cara lama dan kurang efektif
      // $data = DB::table("mhs")->paginate(5);  // pake DB
      $data = Mhs::paginate(5);  // pake Mhs/eloquentnya
      $ada = (count($data)>0) ? true : false;
      DB::commit();
      return view("dbLihat", ["data"=>$data, "ada"=>$ada]);
    } catch (\Exception $e) {
      DB::rollback();
      return back()->with("dbError", "Terjadi Kesalahan");
    }

  }
  function cari(Request $req){
    DB::beginTransaction();
    try {
      // $data = DB::select("select * from mhs where nama like ?", ["%".$req->nama."%"]); cara lama
      // $data = DB::table("mhs")
      //         ->where("nama", "like", "%$req->nama%")
      //         ->paginate(5);
      $data = Mhs::where("nama", "like", "%$req->nama%")
      ->paginate(5);
      $ada = (count($data)>0) ? true : false;
      DB::commit();
      return view("dbLihat", ["data"=>$data, "ada"=>$ada]);
    } catch (\Exception $e) {
      DB::rollback();
      return back()->with("dbError", "Terjadi Kesalahan");
    }

  }
  function edit(Request $req, $nim){
    DB::beginTransaction();
    try {
      // DB::update("update mhs set nama=? where nim=?",[$req->nama, $nim]);
      Mhs::where("nim", $nim)->update(["nama"=>$req->nama]);
      DB::commit();
      return redirect("/dbTutor/liat")->with("msg", "Update NIM ".$nim." Berhasil");
    }catch (\Exception $e) {
      DB::rollback();
      return back()->with("dbError", "Terjadi Kesalahan")->withInput();
    }

  }
  function delete($nim){
    DB::beginTransaction();
    try {
      // DB::delete("delete from mhs where nim=?",[$nim]);
      Mhs::where("nim", $nim)->delete();  // nda usah kasih petik karena langsung otomatis
      DB::commit();
      return redirect("/dbTutor/liat")->with("msg", "Delete NIM ".$nim." Berhasil");
    } catch (\Exception $e) {
      DB::rollback();
      return back()->with("dbError", "NIM sudah terdaftar");
    }

  }

  function test(){
    $mhs = Mhs::all();
    return $mhs;
  }
}
