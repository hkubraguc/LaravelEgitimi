<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResimYukle extends Controller
{
    public function resimYukleme(Request $request)
    {
      $resimadi= rand(0,1000).".".$request->resim->getClientOriginalExtension();//resmin uzantısını alıp yazdıran fonksiyon
      $yukle = $request->resim->move(public_path('images'),$resimadi);//public klasörünün altındaki images klasörüne yükle.

      //orjinal ismiyle yüklemek için
      //$yukle = $request->resim->move(public_path('images'),$request->resim->getClientOriginalName());aha böyle. bi daha resimadı oluşturmadan direk yükler.


    //  echo "<br>";
      //echo $request->resim->getClientOriginalName();//resmin adını alıp yazdıran fonksiyon

    }


}
