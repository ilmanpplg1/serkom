<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./vendor/bs/bs.min.css">
  <title>SMKN 4 TASIKMALAYA</title>
</head>

<body>
  <?php include 'layout/navbar.php'; ?>
  <?php include 'layout/function.php'; ?>


  <img src="image/gpt.png" alt="" width="100%">

  <div class="container">
    <!-- SECTION INFORMASI -->
    <h1 class="my-4">Sambutan <p class="text-info">Kepala Sekolah</p>
    </h1>
    <div class="row">
      <div class="col-lg-3">
        <div class="card bg-primary">
          <img src="image/pakur.png" alt="..." class="w-100px">
          <h5 class="text-center">Kurniawan S.Pd, M.Pd</h5>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="card-body">
          <h5>Assalamualaikum Warahmatullahi Wabarakatuh</h5>
          <p>
            Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya. Dan
            atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini. Kami berharap dengan
            adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh tentang sekolah
            kami sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan kita
            bersama.
          </p>
          <p>
            Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan yang
            harus kami perbaiki. Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.
          </p>
          <p>
            Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan
            satu persatu atas fasilitasnya yang telah diberikan semoga semua yang kita lakukan bermanfaat bagi
            masyarakat.
          </p>
          <p> Wassalamu'alaikum Warahmatullahi Wabarakatuh.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- TUTUP SECTION INFORMASI -->

  <!-- SECTION BERITA -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center my-4">Berita</h1>
        <div class="row g-4">
          <div class="col-lg-6 d-flex">
            <div class="card flex-fill">
              <img src="image/unik.jpg" alt="..." class="card-img-top">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">Cegah Geng Motor, SMKN di Tasikmalaya Luncurkan Ekstrakurikuler Unik</h3>
                <h5 class="text-end mt-auto">Rabu, 24 Juli 2024</h5>
                <a class="btn btn-primary mt-3" target="_blank"
                  href="https://bandung.kompas.com/read/2024/07/24/115239678/cegah-geng-motor-smkn-di-tasikmalaya-luncurkan-ekstrakurikuler-unik">Baca
                  selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex">
            <div class="card flex-fill">
              <img src="image/jb.png" alt="..." class="card-img-top">
              <div class=" card-body d-flex flex-column">
                <h3 class="card-title">SMKN 4 Tasikmalaya Gelar Job Fair 2023</h3>
                <h5 class="text-end mt-auto">Kamis, 12 Oktober 2023</h5>
                <a class="btn btn-primary mt-3" target="_blank"
                  href="https://ruangatas.com/smkn-4-tasikmalaya-gelar-job-fair-2023-harapkan-angka-pengangguran-di-tasikmalaya-berkurang/">Baca
                  selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- TUTUP SECTION BERITA -->


  <!-- SECTION GALERI -->
  <section style="background-color: #E6E6FA;">
    <div class="container my-4">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center my-4">Galeri</h1>
          <div class="row">
            <div class="col-lg-3"><img src="image/hut1.JPG" alt="..." class="card w-100 h-100"></div>
            <div class="col-lg-3"><img src="image/hut2.JPG" alt="..." class="card w-100 h-100"></div>
            <div class="col-lg-3"><img src="image/hut3.JPG" alt="..." class="card w-100 h-100"></div>
            <div class="col-lg-3"><img src="image/hut4.JPG" alt="..." class="card w-100 h-100"></div>
          </div>
          <div class="text-center my-4">
            <a class="btn btn-primary" href="galeri.php">Lihat Lainnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- TUTUP SECTION GALERI -->

  <!-- SECTION STATISTIK -->
  <section style="background-color: #cfe2ff;">
    <div class="container">
      <div class="row">

        <h1 class="text-center my-4">Data Statistik</h1>

        <div class="col-lg-3">
          <div class="card text-center border-0">
            <div class="card-body  bg-primary-subtle">
              <h2 class="counter"><?= $data['siswa']; ?></h2>
              Siswa
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card text-center border-0">
            <div class="card-body  bg-primary-subtle">
              <h2 class="counter"><?= $data['pendidik']; ?></h2>
              Guru
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card text-center border-0">
            <div class="card-body  bg-primary-subtle">
              <h2 class="counter"><?= $data['rombel']; ?></h2>
              Rombel
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card text-center border-0">
            <div class="card-body  bg-primary-subtle bg-transparent ">
              <h2 class="counter"><?= $data['keahlian']; ?></h2>
              Program Keahlian
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
  <!-- TUTUP SECTION STATISTIK -->

  <!-- SECTION KEJURUAN -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center my-4">Program Kejuruan</h1>
        <p class="text-center">Program Keahlian yang ada di SMKN 4 Tasikmalaya</p>
        <div class="row">
          <div class="col-lg-4">
            <div class="card border-0">
              <div class="card-body text-center rounded-4">
                <a class="text-decoration-none" href="INDEX.PHP">
                  <img src="icon/rpl.png" alt="" width="20%">
                  <h3>PPLG</h3>
                </a>
                <p>Pengembangan Perangkat Lunak dan Game berfokus pada aplikasi perangkat lunak dan pengembangan game.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-center border-0">
              <div class="card-body rounded-4">
                <a class="text-decoration-none" href="INDEX.PHP">
                  <img src="icon/tkj.png" alt="" width="20%">
                  <h3>TJKT</h3>
                </a>
                <p>Teknik Jaringan Komputer dan Telekomunikasi mempersiapkan siswa untuk merancang, menginstal, dan memelihara jaringan.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-center border-0">
              <div class="card-body rounded-4">
                <a class="text-decoration-none" href="INDEX.PHP">
                  <img src="icon/tbsm.png" alt="" width="20%">
                  <h3>TBSM</h3>
                </a>
                <p>Teknik Sepeda Motor mengajarkan keterampilan dalam memperbaiki, merawat, dan memelihara sepeda motor.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-4">
            <div class="card text-center border-0">
              <div class="card-body rounded-4">
                <a class="text-decoration-none" href="INDEX.PHP">
                  <img src="icon/dkv.png" alt="" width="20%">
                  <h3>DKV</h3>
                </a>
                <p>Desain Komunikasi Visual berfokus pada fotografi dan videografi untuk media komunikasi visual.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-4">
            <div class="card text-center border-0">
              <div class="card-body rounded-4">
                <a class="text-decoration-none" href="INDEX.PHP">
                  <img src="icon/toi.png" alt="" width="20%">
                  <h3>TOI</h3>
                </a>
                <p>Teknik Otomasi Industri mempelajari penerapan teknologi dalam sistem otomasi di industri manufaktur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- TUTUP SECTION KEJURUAN -->
  </div>
  <?php include 'layout/footer.php'; ?>


  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>