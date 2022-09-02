<?php
    if (isset($_POST["btnSubmit"])) {
        $id = $_POST["id"];
        $tahun = $_POST["tahun"];
        $jemaat = $_POST["jemaat"];
        $kehadiran = $_POST["kehadiran"];
        $cabang = $_POST["cabang"];

    $dbname = "gabipusa_gabidb";
    $host = "localhost";
    $username = "gabipusa_host";
    $password = "12345";

        $conn = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
            echo "Koneksi ke server gagal dilakukan.";
            exit();
        }

        $query = "update jemaat set `tahun` = '$tahun', `data_jemaat` = '$jemaat', `data_kehadiran` = '$kehadiran', `cabang` = '$cabang' where `id` = '$id'";

        mysqli_query($conn, $query);
        $num = mysqli_affected_rows($conn);
        if ($num > 0) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
    }
?>