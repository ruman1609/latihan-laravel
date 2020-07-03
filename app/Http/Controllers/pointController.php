<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pointController extends Controller{
  function index(Request $req){
      return view("pointop", ["nilai" => $req->point]);
  }
}
