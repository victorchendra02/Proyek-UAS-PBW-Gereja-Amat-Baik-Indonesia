<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />

    <!-- style css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <style>
        .victor {
            border-style: solid;
        }

        .removeunderline {
            text-decoration: none;
        }

        .myblack {
            color: black;
        }
    </style>

    <link rel="icon" href="../img/church_icon.png" type="image/png" />
    <title>GABI - Galeri</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #17c3cc">
        <div class="container">
            <a class="navbar-brand" href="../index.php"><img src="../img/church_icon.png" alt="nav logo" style="width: 38px" /> Gereja Amat Baik Indonesia</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" aria-current="page" href="../index.php">Beranda</a>
                    </li>

                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Bacaan </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="artikel.php">Artikel</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="warta.html">Warta</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="cabang.html">Cabang</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link active" href="galeri.php">Galeri</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="tentang.html">Tentang</a>
                    </li>

                    <li class="nav-item ms-4">
                        <a class="nav-link" href="login_admin.php"><i class="bi bi-person-circle me-2"></i> Masuk admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main page -->
    <div class="container py-5">
        <h1 class="text-center"><b>Galeri Gereja</b></h1>

        <!-- galeri -->
        <?php
        $dbname = "gabipusa_gabidb";
        $host = "localhost";
        $username = "gabipusa_host";
        $password = "12345";

        $conn = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
            echo "Koneksi ke server gagal dilakukan.";
            exit();
        }

        $query = "SELECT * FROM gallery";
        $result = mysqli_query($conn, $query);
        $numRow = mysqli_num_rows($result);

        if ($result) {
        ?>

            <div class="container d-flex justify-content-center py-3">
                <!-- Carousel bootstrap -->
                <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel" style="width: 80%">
                    <div class="carousel-indicators">

                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                        <?php
                        for ($x = 1; $x <= $numRow; $x++) {
                            echo "<button type='button' data-bs-target='#carouselExampleDark' data-bs-slide-to='$x' aria-label='Slide $x+1'></button>";
                        } ?>
                    </div>


                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="../adminGereja/uploadFoto/galeri_11.jpg" class="d-block w-100" alt="image" />
                            <div class="carousel-caption d-none d-md-block">
                                <div class="mx-auto myblack" style="background-color: rgb(239, 239, 239); width: 80%">
                                    <h5><?php echo 'Next to see the photo'; ?></h5>
                                </div>
                            </div>
                        </div>
                        <?php
                        while ($row = mysqli_fetch_row($result)) {
                            $lokasi = $row[1];
                            $keterangan = $row[2];
                        ?>

                            <div class="carousel-item" data-bs-interval="10000">
                                <img src="../adminGereja/uploadFoto/<?php echo $lokasi; ?>" class="d-block w-100" alt="image" />
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="mx-auto myblack" style="background-color: rgb(239, 239, 239); width: 80%">
                                        <h5><?php echo $keterangan; ?></h5>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    </div>

                    <!-- prev button -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <!-- next button -->
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        <?php
            mysqli_free_result($result);
        }
        mysqli_close($conn);
        ?>


        <!-- text -->
        <p class="text-center">
            Ingin mengupload foto? Masuk sebagai admin! <br />
            <a href="login_admin.php">masuk admin</a>
        </p>
    </div>

    <!-- footer -->
    <footer class="container-fluid text-center py-3" style="background-color: #24252a; color: #dcdfe0">
        <!-- <h5><img src="../img/church_icon.png" alt="nav logo" style="width: 24px" /> Gereja Amat Baik Indonesia</h5> -->
        IKUTI KAMI DI MEDIA SOSIAL! <br />

        <a href="https://instagram.com" class="removeunderline text-muted" target="_blank">
            <i class="bi bi-instagram fs-4 px-3" style="color: #dcdfe0"></i>
        </a>

        <a href="https://facebook.com" class="removeunderline text-muted" target="_blank">
            <i class="bi bi-facebook fs-4 px-3" style="color: #dcdfe0"></i>
        </a>

        <a href="https://youtube.com" class="removeunderline text-muted" target="_blank">
            <i class="bi bi-youtube fs-4 px-3" style="color: #dcdfe0"></i>
        </a>
        <br />

        <p style="font-size: 12px">Gereja Amat Baik Indonesia Pusat &copy 2022</p>
    </footer>

    <!-- script boostrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>