<?php
    require "data.php";
    $bodyClass = "black";
    if(isset($_COOKIE['color'])){ //cookiede renk varsa
        $bodyClass = $_COOKIE['color']; //bodyclassı cookieden oku
    }

    header("Refresh: 2; url=change-color.php?color=".$gecerliRenk[rand(0,(count($gecerliRenk)-1))]);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
        <?php foreach ($gecerliRenk as $name => $hex): ?>
        body.<?=$name?>{color: <?= $hex ?>;}
        div.colors>a.<?=$name?>{background-color:<?=$hex?>;}
        <?php endforeach;?>
    </style>
</head>
<body class="<?=$bodyClass?>">
<div class="container">
<div class="colors">
    <?php foreach ($gecerliRenk as $name => $hex): ?>
    <a href="change-color.php?color=<?=$name?>" class="<?= $name?>">&nbsp;</a>
    <?php endforeach;?>
</div>
<p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
</div>
</body>
</html>