<html>
<head>
    <link rel="stylesheet" href="bootstrap/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <div class="container" style="margin-left:30%">
        <div class="form-group row cerceve">
            <form method="post" action="ogrencikayit.php">
                <div class="col-md-4">
                    <?php
                    $sayi = $_POST['sinifmevcudu'];
                    for ($i = 0; $i < $sayi; $i++){
                        ?>
                            <input type="text" class="inputlar" name="ogrenci[<?= $i; ?>]" placeholder="Öğrenci Adı Giriniz">
                    <?php
                    }
                    ?>
                </div>
        </div>
        <button type="submit">Kaydet</button>
        </form>
    </div>
</body>
</html>
