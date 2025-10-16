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

    <!-- SECTION ESKUL -->

    </h3>

    <div class="container">
        <div class="row">
            <?php
            $eskul = [
                ["gambar" => "image/pks.png", "nama" => "PKS"],
                ["gambar" => "image/paskib.png", "nama" => "PASKIBRA"],
                ["gambar" => "image/pramuka.png", "nama" => "PRAMUKA"],
                ["gambar" => "image/pmr.png", "nama" => "PMR"],
                ["gambar" => "image/irma.png", "nama" => "ROHIS"],
                ["gambar" => "image/futsal.png", "nama" => "FUTSAL"],
                ["gambar" => "image/basket.png", "nama" => "BASKET"],
                ["gambar" => "image/pd.jpg", "nama" => "PERISAI DIRI"]
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
    <?php include 'layout/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>