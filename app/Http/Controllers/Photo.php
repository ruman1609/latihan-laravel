<?php

namespace App\Http\Controllers;

use App\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class Photo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Foto.testfoto_index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $valid = $request->validate([
        "foto" => "mimes:jpeg,png"
      ]);
      $image = $request->file("foto");
      $filename = time().".".$image->getClientOriginalExtension();
      $file = Hash::make($filename);
      $file = str_replace("/", ".", $file);
      $file = str_replace("\\", ".", $file);
      while(Hash::needsRehash($file)){
        $file = Hash::make($file);
        $file = str_replace("/", ".", $file);
        $file = str_replace("\\", ".", $file);
      }
      echo($file);
      $request->foto->storeAs("\public", $file);
      // Storage::put(public_path("storage")."/".$filename, $img);
      echo("Berhasil");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
