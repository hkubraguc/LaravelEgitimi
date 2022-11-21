<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{
  public function ekle(){
    DB::table("bilgiler")->insert([
      "metin"=>"Yeni Kayıt ak akçe kara gün içindir."
    ]);
  }

  public function guncelle(){
    DB::table("bilgiler")->where("id",1)->update([
      "metin" => "Bu metin alanımiz güncellenmiştir."
    ]);
  }

  public function sil(){
    DB::table('bilgiler')->where("id",1)->delete();
  }

  public function bilgiler(){
    $veriler = DB::table("bilgiler")->get(); /*Veritabanındaki tüm kayıtlar veriler isimli değişkene atılır. where koyarak filtreli çekebiliriz.*/
    //print_r($veriler); tümünü yazdırır.

      foreach ($veriler  as $key => $bilgi) {//herhangi bir yerde tek tek çekmek için
       echo $bilgi->metin."<br>";
    }

    /*tek bir veri çekeceksek mesela id si iki olan veriyi
    $veri = DB::table("bilgiler")->where("id",2)->first();//direk first komutu sayesinde foreach e gerek kalmadan tek bir veri okuduk.
    echo $veri->metin;
    */

  }
}
