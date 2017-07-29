<?php

$ogrenciler = $_POST['ogrenci'];

$okunacakDosya = "data.json";

$yeniOgrencilerJSON = json_encode($ogrenciler); //JSON
$dosyaKaynak = fopen($okunacakDosya,"w+");
$dosyaIcerik = fwrite($dosyaKaynak,$yeniOgrencilerJSON);
fclose($dosyaKaynak);

//
header("Location: index.php");