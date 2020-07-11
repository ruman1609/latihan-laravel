<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\KelasL;

class KirimEmail extends Controller
{
    function index(){
      return view("Email.kirim");
    }
    function proses(Request $req){
      Mail::to($req["email"])->send(new KelasL($req));
      return back()->with("msg", "pesan berhasil dikirim");
    }
}
