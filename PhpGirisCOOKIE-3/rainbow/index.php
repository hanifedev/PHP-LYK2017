<?php
/*
 * Sayfa içeriğimizin metin renginin değiştirilebilir olmasını istiyoruz.
 * Bu renk değişim işlemini (PHP sınıfında olduğumuz için) PHP üzerinden yapacağız.
 * Kullanıcının ekranda gösterilen renk seçeneklerinden dilediğini seçmesini ve sayfa içeriğinin bu renge
 * dönmesini sağlamalıyız. Kullanıcının yaptığı seçim sayfa yenilendiğinde ve/veya site içerisindeki başka
 * bir sayfaya geçildiğinde de hatırlanmalı ve içerik bu renkte gösterilmelidir.
 *
 * RENKLER
 * Black
 * Red
 * Green
 * Blue
 */
/*if(isset($_GET['color'])) { //getten renk geldiyse
    $color = $_GET['color']; //rengi getten gelen renge ata
}else{
    $color = "black"; //gelmediyse siyah olarak ata
}
*/
$dizi =[
    "black" => "black",
    "red" => "red",
    "green" => "green",
    "blue" => "blue",
    "darkblue" => "#186196"
];
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : "black"; //aynı değişkeni atama yapacaksak tek satırda yapabiliriz

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gökkuşağı</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="color:<?php if(array_key_exists($color, $dizi)) echo $color;?>;">
<ul class="colors">
    <?php foreach ($dizi as $key => $renk): ?>
    <li style="background:<?=$renk?>"><a href="change-color.php?color=<?=$key?>">&nbsp;</a></li>
    <?php endforeach;?>
</ul>
<p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
    make a type specimen book. It has survived not only five centuries, but also the leap into electronic
    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
    Aldus PageMaker including versions of Lorem Ipsum.
</p>
</body>
</html>
