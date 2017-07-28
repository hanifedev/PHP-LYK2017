<?php

/*
 * Bu sayfada kullanıcının yeni renk tercihini alıp ihtiyac duyduğumuz her zaman kullanabilmek için
 * kaydetmeliyiz.
 * Bunu sağlayabilmek adına cookienin bahşedilmiş nimetlerinden yararlanacağız.
 */

if(isset($_GET['color'])){ //adres cubugundan color geldiyse
    setcookie("color", $_GET['color']); //cookiede color olarak HTTP yanıtında gönder
}
header("Location: /rainbow");