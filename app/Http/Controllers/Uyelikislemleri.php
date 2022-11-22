<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uyelikislemleri extends Controller
{
    public function uyekayit(Request $uyebilgileri)
    {
      $uyebilgileri->validate([
        "adsoyad" => "required|min:3|max:30",
        "telefon" => "required|min:10|max:12",
        "email"   => "required|email:rfc,dns"
      ]);
      echo "Form bilgileriniz filtreden başarıyla geçti.";
      
    }
}
