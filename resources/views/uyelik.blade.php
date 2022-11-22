<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Üye Kayıt Formu</title>

    </head>
  <body>
    @if($errors->any())
    <ul>
      @foreach ($errors->all() as $hatalar)
        <li>{{$hatalar}}</li>
      @endforeach
    </ul>
    @endif
    <form action = "{{route('uyekayit')}}" method="post">
      @csrf

      <label>Ad Soyad </label><br>
      <input type="text" name="adsoyad"><br>

      <label>Telefon</label><br>
      <input type="text" name="telefon"><br>

      <label>E-Mail</label><br>
      <input type="text" name="email"><br>

  <br>

  <input type="submit" name="ilet" value="Gonder">





    <form>
    </body>


</html>
