<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Feeder Api</title>
</head>
<body>
    <h1 style="text-align:center;">Product Feeder Api Dökümantasyon sayfası</h1>

    <h2> Çalışan Requestler</h2>
    <hr>
    Sayfalar
    <ul>
  <li>http://localhost:1234/info</li>
  <li>http://localhost:1234/anasayfa</li>
  <li>http://localhost:1234/</li>
  <li>http://localhost:1234/404.php</li>
    </ul>
    Json requestsler
    <ul>
  <li>get-/Json/items/</li>
  <li>get-/Json/items/$id</li>
  <li>get -/Json/items/delete/$id</li>
    </ul>
    Xml requestsler
    <ul>
    <li>get-/Xml/items/</li>
  <li>get-/Xml/items/$id</li>
  <li>get -/Xml/items/delete/$id</li>
    </ul>
    Not:Bütün verileri sıralayan get requestlerinde pagination yapılması gereklidir.
    Post ve (Put & Patch ) sisteme eklenecektir.
    <hr>
    <h2> Eksiklikler</h2>
    <hr>
    <ul>
      <li>Moduller (Logs,Test,Lib) içerisindeki controllere alt sınıflar eklenmesi gereklidir.</li>
    </ul>
     <hr>
     <h2> Proje içerisine eklenmesi gerekenler</h2>
   
     <hr>
     Eksiklikler dışında api için  yapılması gereken şunlardır.
     <br>
     <ul>
     <li>Docker eklenmeli</li>
     <li>Message broker eklenmeli</li>
     <li>Cache Kontrolü yapılmalı</li>
    </ul>
    <hr>
<h2 style="text-align:left;"> Uyarı</h2>
  Yukarıdaki özellikleri gerçek bir proje için yazdım.

  <br>
  <br>
  <br>
     

</body>
</html>
