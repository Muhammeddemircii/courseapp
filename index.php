<?php
    $kurs1_baslik="PHP Kursu";
    $kurs1_altBaslik="Sıfırdan ileri seviye PHP ile web geliştirme";
    $kurs1_resim="php.png";
    $kurs1_yayinTarihi="01.01.2023";
    $kurs1_yorumSayisi="100";
    $kurs1_begeniSayisi="300";

    $kurs2_baslik="Python Kursu";
    $kurs2_altBaslik="Sıfırdan ileri seviye Python programlama";
    $kurs2_resim="python.png";
    $kurs2_yayinTarihi="01.01.2023";
    $kurs2_yorumSayisi="300";
    $kurs2_begeniSayisi="400";

    $kurs3_baslik="Node.js Kursu";
    $kurs3_altBaslik="Sıfırdan ileri seviye Node.js ile web geliştirme";
    $kurs3_resim="nodejs.png";
    $kurs3_yayinTarihi="01.01.2023";
    $kurs3_yorumSayisi="500";
    $kurs3_begeniSayisi="300";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <div class="card mb-3">
            <div class="row">
               <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim; ?>" alt="php kurs logosu" class="img-fluid rounded-start">
               </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs1_baslik; ?></h5>
                        <p class="card-text"><?php echo $kurs1_altBaslik; ?></p>
                        <span class="badge rounded-pill text-bg-primary">
                            begeni:<?php echo $kurs1_begeniSayisi?>
                        </span>
                        <span class="badge rounded-pill text-bg-primary">
                            yorum:<?php echo $kurs1_yorumSayisi?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
               <div class="col-3">
                    <img src="img/<?php echo $kurs2_resim; ?>" alt="php kurs logosu" class="img-fluid rounded-start">
               </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs2_baslik; ?></h5>
                        <p class="card-text"><?php echo $kurs2_altBaslik; ?></p>
                        <span class="badge rounded-pill text-bg-primary">
                            begeni:<?php echo $kurs2_begeniSayisi; ?>
                        </span>
                        <span class="badge rounded-pill text-bg-primary">
                            yorum:<?php echo $kurs2_yorumSayisi; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
               <div class="col-3">
                    <img src="img/<?php echo $kurs3_resim; ?>" alt="php kurs logosu" class="img-fluid rounded-start">
               </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs3_baslik; ?></h5>
                        <p class="card-text"><?php echo $kurs3_altBaslik; ?></p>
                        <span class="badge rounded-pill text-bg-primary">
                            begeni:<?php echo $kurs3_begeniSayisi; ?>
                        </span>
                        <span class="badge rounded-pill text-bg-primary">
                            yorum:<?php echo $kurs3_yorumSayisi; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>