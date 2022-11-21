<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>İletişim Formu</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://tasarim.phpturkiye.net/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://tasarim.phpturkiye.net/css/styles.css" rel="stylesheet" />
    </head>
  <body>
    <form action = "{{route('iletisim-sonuc')}}" method="post">
      @csrf

      <label>Ad Soyad </label><br>
      <input type="text" name="adsoyad"><br>

      <label>Telefon</label><br>
      <input type="text" name="telefon"><br>

      <label>E-Mail</label><br>
      <input type="text" name="email"><br>

      <label>Mesaj</label><br>

    <textarea name="metin">

    </textarea>
  <br>

  <input type="submit" name="ilet" value="Gonder">





    <form>
    </body>


</html>
