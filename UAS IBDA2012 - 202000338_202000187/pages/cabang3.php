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
                color: black;
            }
            .myblack {
                color: black;
            }
            .my_active {
                background-color: #0d6efd;
                color: #fafcff;
            }
        </style>

        <link rel="icon" href="../img/church_icon.png" type="image/png" />
        <title>GABI - Bekasi | Indonesia</title>
    </head>
    <body>
        <!-- header navbar -->
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
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="warta.html">Warta</a></li>
                            </ul>
                        </li>

                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="cabang.html">Cabang</a>
                        </li>

                        <li class="nav-item mx-2">
                            <a class="nav-link" href="galeri.php">Galeri</a>
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
        <div class="container pt-5 pb-2 text-center">
            <h1><b>GABI | Bekasi - Indonesia</b></h1>
        </div>
        <div class="container pb-5 d-flex justify-content-center">
            <div class="card mb-3" style="width: 70%">
                <div class="container pt-2">
                    <img src="../img/galeri_3.jpg" class="card-img-top" alt="gambarrr 1" style="border-radius: 5px" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">Gereja Amat Baik Indonesia - Bekasi | Indonesia</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Ruang Ibadah Utama</small></p>
                </div>
            </div>
        </div>

        <!-- data  -->
        <div class="container pb-5">
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
        
            $query = "SELECT * FROM jemaat WHERE cabang = 'c' order by tahun";
            $result = mysqli_query($conn, $query);
        
            if ($result) {
            ?>
        
                <h1><b>Data Kehadiran</b></h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jumlah Jemaat</th>
                        <th scope="col">Jumlah Kehadiran</th>
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
                            ?>
                            <th scope="row">-</th>
                            <td><?php echo $tahun; ?></td>
                            <td><?php echo $jemaat; ?></td>
                            <td><?php echo $hadir; ?></td>
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

        <!-- jadwal -->
        <div class="container pb-5">
            <h1><b>Jadwal Ibadah</b></h1>
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
                        <th scope="row">Kebaktian Umum</th>
                        <td>Minggu</td>
                        <td>12.00 WIB</td>
                    </tr>
                    <tr>
                        <th scope="row">Persekutuan Pemuda</th>
                        <td>Sabtu</td>
                        <td>19.00 WIB</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- lokasi gereja -->
        <div class="container">
            <div class="container d-flex justify-content-center">
                <h1>LOKASI GEREJA</h1>
            </div>

            <!-- maps location -->
            <div class="container py-4 d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d155343.07060050723!2d106.91525736848664!3d-6.277191267821029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d8546ad633d%3A0x79e8de8965402078!2sBekasi%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1651742854692!5m2!1sen!2sid"
                    width="1000"
                    height="500"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>

            <div class="container pb-5 d-flex justify-content-center">
                <p class="text-center">
                    Gereja Amat Baik Indonesia †<br />
                    Very Good Church Center Indonesia (VGCCI) <br />
                    Jl. Kembang Bunga No.23. Bekasi, Indonesia, <i class="bi bi-telephone"></i> ph: (021) 46667555; Fax. (+62) 46667012 <br />
                    <i class="bi bi-globe"></i> gabipusat.my.id | <i class="bi bi-envelope"></i> e-mail: gerejaamatbaikindonesia@gabi.org
                </p>
            </div>
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
