<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        while($i < 25){
          $fake = Faker::create("id_ID");
          DB::insert("insert into mhs(nama, nim) values(?,?)", [$fake->name, mt_rand(1000000000, 9999999999)]);
          // mt_rand tu buat random min dan max dalam bentuk string 
          $i++;
        }
    }
}
