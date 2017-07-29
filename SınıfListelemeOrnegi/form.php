<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
<div class="container">
    <form method="post" action="veriekle.php">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" style="margin-top:8px">Kaç Kişi Eklenecek:</label>
            <div class="col-sm-6">
                <input type="text" name="sinifmevcudu" class="form-control" placeholder="Sınıf mevcudu giriniz">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn" value="ekle">İleri</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>