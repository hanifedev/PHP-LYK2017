<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/26/17
 * Time: 8:03 PM
 */
    function diziOlustur($adet){
        $kolonlar = [];
        for($i = 0; $i < $adet; $i++){
            $kolon = [];
            do{
                $kolon[] = rand(1,49);
                $kolon = array_unique($kolon);
            }while(count($kolon)<6);
            sort($kolon);
            $kolonlar[] = $kolon;
        }
        return $kolonlar;
}
?>


<form method="post">
    <input type="text" name="kolon"/>
    <input type="submit" value="Gonder"/>
</form>

<?php
    if($_POST) {
        $sayi = $_POST["kolon"];
    }
    $dizi = diziOlustur($sayi);
    foreach ($dizi as $degerler){
        echo"<h3> Satır </h3>";
        foreach ($degerler as $dgr){
            echo "$dgr ";
        }
    }
?>
