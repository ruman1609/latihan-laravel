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
  "middleware" => "age: 20",  // middleware sesuai namanya
  // age itu dari kernel.php yang ada di folder http
  "uses" => "User@test",  // uses buat controller
  // contoh uses  "uses" => "namaController@namaFungsiController"
]);

Route::get("/akun", function(){
  return view("akun");
});
Route::get("/middletest", "AkunMantap@awal");
Route::post("/middletest/proses", "AkunMantap@cek")->middleware("login");
Route::get("/middletest/akun/{user}", "AkunMantap@masuk");

Route::get("/daftar", function(){ return view("Daftar.daftar"); });
Route::post("/daftar/proses", "AkunMantap@daftar");

Route::post("/akun/masuk", "akuns@masuk");  // post disamakan dengan method di form
Route::post("/akun/masuk/point", "pointController@index");

Route::get("/dbTutor", "dbController@index");
Route::post("/dbTutor/kirim", "dbController@kirim");
Route::get("/dbTutor/liat", "dbController@liat");
Route::get("/dbTutor/liat/cari", "dbController@cari");
Route::get("/dbTutor", function(){
  return view("db");
});
Route::get("/dbTutor/edit/{nim}", function($nim){
  return view("dbUpdate",["nim"=>$nim]);
});  // {nim} dari parameter itu
Route::get("/dbTutor/edit/{nim}/proses", "dbController@edit");
Route::get("/dbTutor/delete/{nim}", "dbController@delete");  // {nim} dari parameter itu
Route::get("/dbTutor/test","dbController@test");

Route::get("/kirim","KirimEmail@index");
Route::post("/kirim/proses","KirimEmail@proses");
Route::get("/kirim/test", function(){
  $mail = new App\Mail\KelasL();
  return $mail->render();
});


Route::resource("testfoto", "Photo"); // https://laravel.com/docs/7.x/controllers#resource-controllers
// liat yang di situ yaa isi resourcenyaa
