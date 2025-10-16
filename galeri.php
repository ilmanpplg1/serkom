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
  <?php include 'layout/navbar.php'; ?>

  <!-- SECTION GALERI -->
  <?php
  $galeri = [
    'image/hut1.JPG',
    'image/hut2.JPG',
    'image/hut3.JPG',
    'image/hut4.JPG',

  ];
  $i = 0;

  ?>
  <div class="row">
    <div class="col-lg-12">
      <hr>
      <h1 class="text-center">Gerak Jalan HUT Ke-80</h1>
      <hr>
      <div class="row">
        <?php while ($i < count($galeri)): ?>
          <div class="col-lg-3">
            <div class="card">
              <img src="<?= $galeri[$i] ?>" alt="..." class="w-100 h-100">
            </div>
          </div>
          <?php $i++; ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <!-- TUTUP SECTION GALERI -->
  <?php include 'layout/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>