<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="style.css">
    <title>SMKN 4 TASIKMALAYA</title>
</head>

<body class="bg-secondary-subtle">
     <?php include 'layout/navbar.php';?>

    <!-- SECTION SEJARAH -->

    <h2 class="my-3 text-center my-3"><b>Program Kejuruan</b>
    </h2>
    <div class="container ">
        <div class="row">
            <?php
            $sejarah = [
                [ "gambar" => "image/1.png",
                 "deskripsi" => "Teknik Jaringan Komputer dan Telekomunikasi mempersiapkan siswa untuk merancang, menginstal, dan memelihara jaringan."],
                [ "gambar" => "image/2.png",
                 "deskripsi" => "Teknik Otomasi Industri mempelajari penerapan teknologi dalam sistem otomasi di industri manufaktur."],
                [ "gambar" => "image/3.png",
                 "deskripsi" => "Desain Komunikasi Visual berfokus pada fotografi dan videografi untuk media komunikasi visual."],
                [ "gambar" => "image/4.png",
                 "deskripsi" => "Teknik Sepeda Motor mengajarkan keterampilan dalam memperbaiki, merawat, dan memelihara sepeda motor."],
                [ "gambar" => "image/5.png",
                 "deskripsi" => "Pengembangan Perangkat Lunak dan Game berfokus pada aplikasi perangkat lunak dan pengembangan game."]
            ];
            
            foreach ($sejarah as $index => $item) { 
              
               if ($index == 3) {
            echo '<div class="row justify-content-center">'; 
        }
        ?>
            <div class="col-lg-4 mb-5 d-flex justify-content-center ">
                <div class="card rounded-4 shadow-lg">
                    <div class="card-header" >
                        <img src="<?= $item['gambar']; ?>" class="card-img-top" alt="..."  width="50%" height="100%">
                    </div>
                    <div class="card-body">
                      <h5><p class="text-center"><?= $item['deskripsi']; ?></p></h5>
                    </div>
                </div>
            </div>
         <?php } ?>
        </div>
    </div>
    <!-- TUTUP SECTION KEJURUAN -->
      <?php include 'layout/footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>