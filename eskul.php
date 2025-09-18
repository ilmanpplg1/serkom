<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="style.css">
    <title>SMKN 4 TASIKMALAYA</title>
</head>

<body>
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

    <!-- SECTION ESKUL -->
    <h3 class="my-3 text-center"><b>Ekstrakurikuler</b>
    <p class="text-info">Siswa</p>
</h3>

<div class="container">
    <div class="row">
        <?php 
            $eskul = [  
                [ "gambar" => "image/pks.png", "nama" => "PKS" ],
                [ "gambar" => "image/paskib.png", "nama" => "PASKIBRA" ],
                [ "gambar" => "image/pramuka.png", "nama" => "PRAMUKA" ],
                [ "gambar" => "image/pmr.png", "nama" => "PMR" ],
                [ "gambar" => "image/irma.png", "nama" => "ROHIS" ],
                [ "gambar" => "image/futsal.png", "nama" => "FUTSAL" ],
                [ "gambar" => "image/basket.png", "nama" => "BASKET" ],
                [ "gambar" => "image/pd.jpg", "nama" => "PERISAI DIRI" ]
            ]; 
            foreach ($eskul as $item) { ?>
                <div class="col-lg-3">
                    <div class="card m-3">
                        <div class="card-header d-flex justify-content-center">
                            <img src="<?= $item["gambar"] ?>" alt="" width="200" height="200">
                        </div>
                        <div class="card-body">
                            <h4 class="text-center"><?= $item["nama"] ?></h4>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </div>
</div>
     <!-- FOOTER -->
  <div class="container-fluid my-5">
    <h1 class="text-center my-4"><b>MITRA INDUSTRI</b></h1>
    <div class="row bg-secondary">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-5 text-white">
            <h3 class="text-center">SMKN 4 Tasikmalaya</h3>
            <hr>
            <p>Jl Depok Kel. Sukamenak Kec. Purbaratu Kota Tasikmalaya 46196.</p>
            <p>+62265312059</p>
            <p>info@smkn4-tsm.sch.id</p>
          </div>
          <div class="col-lg-3 text-white">
            <h3 class="text-center">Media Sosial</h3>
            <hr>
            <a class="text-white text-decoration-none" href="https://www.facebook.com/4smknJl" target="_blank">
              <img src="icon/icons8-facebook-logo-100.png" alt="" width="7%" > Facebook
            </a><br>
            <a class="text-white text-decoration-none" href="#">
              <img src="icon/icons8-youtube-logo-96.png" alt="" width="7%"> Youtube
            </a><br>
            <a class="text-white text-decoration-none" href="#">
              <img src="icon/icons8-instagram-100.png" alt="" width="7%"> Instagram
            </a>
          </div>
          <div class="col-lg-3 text-white">
            <h3 class="text-center">Link Eksternal</h3>
            <hr>
            <a class="text-white text-decoration-none" href="https://kemendikdasmen.go.id/" target="_blank" >Kemendikbud</a><br>
            <a class="text-white text-decoration-none" href="index.html">Dapodikdasmen</a><br>
            <a class="text-white text-decoration-none" href="index.html">Psmk</a><br>
            <a class="text-white text-decoration-none" href="https://disdik.jabarprov.go.id/" target="_blank" >Disdik Jabar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- TUTUP FOOTER -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>