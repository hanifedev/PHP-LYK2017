<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/26/17
 * Time: 7:24 PM
 */

function ekranaYaz($metin){
    echo "<h1>". $metin ."</h1>";
}

ekranaYaz("Hanife");

function rastgeleDizi($elemanSayisi, $benzersizMi = false){
    $dizi = [];
    $max = 99;
    if($elemanSayisi > $max){
        $max = $elemanSayisi;
    }
    for($i = 0; $i < $elemanSayisi; $i++){
        if($benzersizMi) {
            do {
                $sayi = rand(0, $max);
            } while (in_array($sayi,$dizi));
        }
        else{
            $sayi = rand(0,$max);
        }
        $dizi[] = $sayi;
    }

    return $dizi;
}

/*$sonuc =rastgeleDizi(5,true);
foreach($sonuc as $snc){
    echo "$snc <br>";
}
*/
?>

<form method="post">
    <input type="text" name="adet"/>
    <input type="checkbox" name="benzersiz"/>
    <input type="submit" value="Gonder"/>
</form>

<?php
if($_POST) {
    $adet = $_POST["adet"];
    $benzersiz = isset($_POST["benzersiz"]);
    $sonuc = rastgeleDizi($adet, $benzersiz);
    foreach ($sonuc as $sayi){
        echo $sayi ."<br>";
    }

}

?>
