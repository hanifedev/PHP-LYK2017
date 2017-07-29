<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>
<div class="container">
    <?php

    $okunacakDosya = "data.json";
    $dosyaKaynak = fopen($okunacakDosya, "r");
    $dosyaIcerik = fread($dosyaKaynak, filesize($okunacakDosya));
    fclose($dosyaKaynak);
    $ogrenciler = json_decode($dosyaIcerik, true); //dizi
    ?>
<ul class="kutu">
    <a href="?sirala=az"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
    <a href="?sirala=za"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i></a>
    <?php
    if(isset($_GET['sirala']))
    {
        $sirala = $_GET['sirala'];

        if ($sirala == "az") {
            sort($ogrenciler);
        } else {
            rsort($ogrenciler);
        }
    }
    ?>
    <?php foreach($ogrenciler as $ogr): ?>
        <li><?=$ogr?></li>
    <?php endforeach; ?>
</ul>

</div>
</body>
</html>