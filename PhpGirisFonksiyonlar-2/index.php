<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/26/17
 * Time: 10:58 AM
 */

for($i = 1; $i<=100; $i++){
    if($i % 3 == 0 && $i % 15 != 0){
        echo "fiz " . $i . " " ." <br>";
    }
    elseif($i % 5 == 0 && $i % 15 != 0){
        echo "buz " . $i . " " ." <br>";
    }
    elseif($i % 15 == 0){
        echo "fizbuz " . $i . " " ." <br>";
    }
}

$sesliharf=['a','e','ı','i','o','ö','u','ü'];
$kelime="eniyiarkadasim";
$sayac = 0;

$karakterler = str_split($kelime); // ["e", "n", "i", "y"...]
foreach($karakterler as $karakter){
    if(in_array($karakter, $sesliharf)){
        $sayac++;
    }
}
echo "Sesli Harf Sayisi: ".$sayac."<br>";

$i = 0;
while($i <= 10){
    echo "$i <br>";
    $i++;
}


$kolonlar = [];
for($i = 0; $i<5; $i++){
    $kolon = [];
   do{
       $kolon[] = rand(1,49);
       $kolon = array_unique($kolon);
   }while(count($kolon)<6);
   sort($kolon);
   $kolonlar[] = $kolon;
}
foreach($kolonlar as $kolon){
    echo "<h3>Kolon</h3>";
    foreach($kolon as $sayi){
        echo "$sayi ";
    }
}

echo "<br> <hr>";

$kolonlar = [];
for($i = 0; $i <5; $i++){
    $dizi = range(1,49); //49 elemanlı dizi
    shuffle($dizi); //karıstır
    $kolon = array_slice($dizi, 0, 6);
    $kolonlar[] = $kolon;
}

foreach($kolonlar as $item){
    sort($item);
    foreach($item as $deger){
        echo "$deger ";
    }
    echo"<br>";
}