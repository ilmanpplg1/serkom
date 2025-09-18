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
    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-4 shadow p-3 mb-5 bg-body rounded sticky-top">
        <div class="container">
            <a class="navbar-brand"><img src="image/logo smkn 4.png" width="15%" height="..."><b>SMKN 4
                    TASIKMALAYA</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link text" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="identitas.php">Identitas Sekolah</a></li>
                            <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="kejuruan.php">Program Kejuruan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="visi&misi.php">Visi & Misi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="eskul.php">Ekstrakurikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php">Galeri</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- TUTUP NAV -->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>