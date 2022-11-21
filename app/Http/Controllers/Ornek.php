<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ornek extends Controller
{
   function test(){
      return "PHP Hatice";
    }

    /*function test2($isim){
      return "PHP ".$isim;
    }*/

    function test2($isim){   //view a kontrollerdan değer gönderme. üstteki test2 ile aynı. biri direk döndürüyor biri view üzerinden döndürüyor.
      return view('ornek',['ad'=>$isim]);
    }

    /*
    function test(){
      return view('ornek'); //viewsdeki örnek isimli view çalışsın.
    }
    */
}
