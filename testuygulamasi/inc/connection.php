<?php
/* Bu dosyada PDO objemizi olusturacagız ki gereken yerlerde gerektiği zaman cagırabilelim ve gerekeni yapalım
    */

$connection = new PDO(
    "mysql:host=localhost;dbname=lyk2017_quiz;charset=UTF8",
    "root",
    "1234"
);

//mysql veritabanını kullanacagımız icin mysql dedik. Parametreleri kullanabilmek için : koyduk.
//host, veritabanı, karakter seti atadık.
//2. parametre kullanıcı adı,3. parametre parola.