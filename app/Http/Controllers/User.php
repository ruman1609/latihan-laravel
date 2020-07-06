<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller{
    public function test(Request $req){
      echo("<p>Ini dari Controller fungsi test()</p>");
    }
}
