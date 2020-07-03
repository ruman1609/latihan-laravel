<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("welcome");
    // return "Hello World"
});

Route::get("/test", function(){
  return view("test");
});

Route::get("/cont", [
  "middleware" => "age: 18",  // middleware sesuai namanya
  // age itu dari kernel.php yang ada di folder http
  "uses" => "User@test",  // uses buat controller
  // contoh uses  "uses" => "namaController@namaFungsiController"
]);

Route::get("/akun", function(){
  return view("akun");
});

Route::post("/akun/masuk", "akuns@masuk");  // post disamakan dengan method di form

Route::post("/akun/masuk/point", "pointController@index");

Route::get("/dbTutor", "dbController@index");
Route::post("/dbTutor/kirim", "dbController@kirim");
Route::get("/dbTutor/liat", "dbController@liat");
