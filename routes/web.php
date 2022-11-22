<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\FormIslemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\Iletisim;
use App\Http\Controllers\ResimYukle;







Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/deneme',function(){
  return view('ornek');
});
*/

Route::get("/phpturkiye", [Ornek::class,'test']); //Ornek kontrollerında  test isimli fonksiyon var onu döndür.

Route::get("/phpturkiye2/{isim}",[Ornek::class,'test2']);

Route::get("/site",[Yonet::class,'site'])->name('site');
Route::get("/form",[FormIslemleri::class,'gorunum']);
Route::middleware('arakontrol')->post("/form-sonuc",[FormIslemleri::class,'sonuc'])->name('sonuc');
Route::get("/ekle",[Veritabaniislemleri::class,'ekle']);
Route::get("/guncelle",[Veritabaniislemleri::class,'guncelle']);
Route::get("/sil",[Veritabaniislemleri::class,'sil']);
Route::get("/listele",[Veritabaniislemleri::class,'bilgiler']);

Route::get("/modelliste",[Modelislemleri::class,'liste']);
Route::get("/modelekle",[Modelislemleri::class,'ekle']);
Route::get("/modelguncelle",[Modelislemleri::class,'guncelle']);
Route::get("/modelsil",[Modelislemleri::class,'sil']);
Route::get("/iletisim",[Iletisim::class,'index']);
Route::post("/iletisim-sonuc",[Iletisim::class,'ekleme'])->name('iletisim-sonuc');
Route::get("/upload",function(){
  return view('upload');
});

Route::post("/resim-ilet",[ResimYukle::class,'resimYukleme'])->name('yukle');










/*


*/
