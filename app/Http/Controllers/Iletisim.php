<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IletisimModel;

class Iletisim extends Controller
{
    public function index(){
      return view("iletisim");
    }

    public function ekleme(Request $request){
      $adsoyad = $request->adsoyad;
      $telefon = $request->telefon;
      $email = $request->email;
      $metin = $request->metin;

      IletisimModel::create([
        "adsoyad"=>$adsoyad,
        "telefon"=>$telefon,
        "mail"=>$email,
        "metin"=>$metin
      ]);
      echo "Bilgileriniz veritabanına kaydedilmiştir.";


    }
}
