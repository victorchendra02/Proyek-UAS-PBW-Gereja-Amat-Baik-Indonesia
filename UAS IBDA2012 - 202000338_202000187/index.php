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
    </style>

    <link rel="icon" href="img/church_icon.png" type="image/png" />
    <title>GABI - Beranda</title>
</head>

<body>
    <!-- header navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #17c3cc">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="img/church_icon.png" alt="nav logo" style="width: 38px" /> Gereja Amat Baik Indonesia</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>

                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Bacaan </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="pages/artikel.php">Artikel</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="pages/warta.html">Warta</a></li>
                        </ul>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="pages/cabang.html">Cabang</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="pages/galeri.php">Galeri</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="pages/tentang.html">Tentang</a>
                    </li>

                    <li class="nav-item ms-4">
                        <a class="nav-link" href="pages/login_admin.php"><i class="bi bi-person-circle me-2"></i> Masuk admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main page -->
    <div class="container pt-4">
        <h1 class="text-center pb-3"><b>Beranda</b></h1>

        <div class="row">
            <div class="col-sm-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/galeri_5.jpg" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="img/galeri_1.jpg" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="img/galeri_3.jpg" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="img/galeri_4.jpg" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="img/galeri_2.jpg" class="d-block w-100" alt="..." />
                        </div>
                    </div>

                    <!-- button -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-sm-6">
                <h4>VISI & MISI GEREJA</h4><br>
                
                <b>Visi GABI</b><br>
                <p>
                    Menjadi sebuah gereja yang berkenan di hati Tuhan, melayani dengan sungguh-sungguh,
                    dan menjadi wadah pembentukan bagi masyarakat, untuk menjadi terang dan membawa berkat di dunia.
                </p>
                
                <b>Misi GABI</b>
                <p>
                    <ol>
                        <li>Membimbing tiap jemaat untuk terus dekat dengan Tuhan</li>
                        <li>Menciptakan suasana yang mendukung persekutuan</li>
                        <li>Menjangkau jiwa-jiwa baru yang rindu bersekutu</li>
                        <li>Melayani demi nama Tuhan untuk misi pelebaran Kerajaan Allah</li>
                    </ol>
                </p>
                
                <b>Motto</b><br>
                <p>
                    Community Rooted and Built Up In Christ
                </p>
            </div>
        </div>
        
        <div class="row text-center pt-5">
            <hr>
            <div class="col-12 pt-3">
                <h1 class="pb-4"><b>Gembala Sidang <br> GABI Pusat</b></h1>
                
                <img src="img/profil_gembala_sidang.png" alt="profil picture" width="220px"><br><br>
                <h4>Pdt. Zayaan Colette Molloy</h4><br><br>
                <hr>
            </div>
        </div>
    </div>

    <!-- Jadwal ibadah -->
    <div class="container py-5">
        <h1 class="text-center"><b>Jadwal Ibadah</b></h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Jam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Kebaktian Umum I</th>
                    <td>Minggu</td>
                    <td>10.00 WIB</td>
                </tr>
                <tr>
                    <th scope="row">Kebaktian Umum II</th>
                    <td>Minggu</td>
                    <td>12.30 WIB</td>
                </tr>
                <tr>
                    <th scope="row">Persekutuan Kaum Wanita</th>
                    <td>Sabtu</td>
                    <td>19.00 WIB</td>
                </tr>
                <tr>
                    <th scope="row">Persekutuan Kaum Pria</th>
                    <td>Sabtu</td>
                    <td>19.00 WIB</td>
                </tr>
            </tbody>
        </table>
        
        <br><br>
        <hr>
    </div>
    <!-- Data -->
    <div class="container text-center pb-5">
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

        $query = "SELECT * FROM jemaat order by tahun";
        $result = mysqli_query($conn, $query);

        if ($result) {
        ?>

            <h1><b>Jumlah Kehadiran Jemaat</b></h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jumlah Jemaat</th>
                        <th scope="col">Jumlah Kehadiran</th>
                        <th scope="col">Cabang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_row($result)) {
                    ?>
                        <tr><?php
                            $tahun = $row[1];
                            $jemaat = $row[2];
                            $hadir = $row[3];
                            $cabang = $row[4];
                            ?>
                            <th scope="row">-</th>
                            <td><?php echo $tahun; ?></td>
                            <td><?php echo $jemaat; ?></td>
                            <td><?php echo $hadir; ?></td>
                            <?php
                            if ($cabang == 'a') {
                            ?>
                                <td><?php echo 'Sydney'; ?></td>
                            <?php
                            } else if ($cabang == 'b') {
                            ?>
                                <td><?php echo 'Jakarta Pusat'; ?></td>
                            <?php
                            } else if ($cabang == 'c') {
                            ?>
                                <td><?php echo 'Bekasi'; ?></td>
                            <?php
                            } else if ($cabang == 'd') {
                            ?>
                                <td><?php echo 'Solo'; ?></td>
                            <?php
                            } else {
                            ?>
                                <td><?php echo 'Los Angeles'; ?></td>
                            <?php
                            }
                            ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>

<?php
            mysqli_free_result($result);
        }
        mysqli_close($conn);
?>
</div>
<br />

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