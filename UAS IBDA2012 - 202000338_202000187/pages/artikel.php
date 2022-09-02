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
        <title>GABI - Artikel</title>
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
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Bacaan </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item my_active" href="artikel.php">Artikel</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="warta.html">Warta</a></li>
                            </ul>
                        </li>

                        <li class="nav-item mx-2">
                            <a class="nav-link" href="cabang.html">Cabang</a>
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
        <div class="container py-5">
            <h1 class="text-center pb-3"><b>Artikel</b></h1>

            <!-- TESTER -->
            
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
        
            $query = "SELECT * FROM artikel";
            $result = mysqli_query($conn, $query);
            
            
        
            if ($result) {

                    while ($row = mysqli_fetch_row($result)) {
                        $filepdf = $row[1]
                    ?>
                        
                        <div>
                            <a href="#" class="removeunderline">
                                <div class="col">
                                    <div class="card h-100">

                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $filepdf; ?></h5>
                                            <embed src="../adminGereja/uploadPDF/<?php echo $filepdf; ?>" width="800px" height="2100px" />
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">GABI</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                    
        </div>

        <?php
        mysqli_free_result($result);
    }
    mysqli_close($conn);
    ?>
            
        
            <!-- TESTER -->
            
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
