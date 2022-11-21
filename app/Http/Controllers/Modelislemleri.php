<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class Modelislemleri extends Controller
{
    public function liste(){
      //$bilgi = Bilgiler::get();//tüm verileri aldık
      $bilgi = Bilgiler::where("id",2)->first(); //tek veri aldık.
      echo $bilgi->metin;


      //$bilgi =Bilgiler::whereId(2)->first()  : aynı çıktıyı verir. whereMetin("ksdjfkjs") de denebilir mesela
      //sütun ismi büyük harfle başlamak zorunda burda. tabloda küçük bile olsa burda büyük yazcaz.


      //$bilgi =Bilgiler::find(2);//id si 2 olan diye bi komut olur otomatik olarak.
    }

    public function ekle(){
      Bilgiler ::create([
        "metin"=>"Yeni metin model ile eklendi.",
      ]);
    }

    public function guncelle(){
      Bilgiler::whereId(4)->update([
        "metin"=>"Yeni metin hişt midgks ile güncellendi.",
      ]);
    }

    public function sil(){
      Bilgiler::whereId(4)->delete();
    }


}
