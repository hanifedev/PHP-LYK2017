<?php
    require "data.php";
    $color = $_GET['color'];
    if(isset($_GET['color'])){ //getten color geliyorsa
        if(in_array($gecerliRenk[$_GET['color']],$gecerliRenk)){
            setcookie("color", $_GET['color']); //rengi cookieye yaz
        }
    }

    header("Location: index.php");