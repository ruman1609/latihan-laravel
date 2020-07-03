<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dbController extends Controller{
  function kirim(Request $req){
    validate($req[  // setel requirement dari datanya
      "nama" => ["required", "max:40"],
      "nim" => ["required", "min:10", "max:10"],
    ]);
    $kirim = [
      "nama" => $req->nama,
      "nim" => $req->nim;
    ];
  }
}
