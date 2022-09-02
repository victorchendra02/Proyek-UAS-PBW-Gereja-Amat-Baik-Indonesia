<?php
    if (isset($_POST["btnSubmit"])) {
        $id = $_POST["id"];
        $nama_foto = $_POST["nama_foto"];
        $keterangan = $_POST["keterangan"];

    $dbname = "gabipusa_gabidb";
    $host = "localhost";
    $username = "gabipusa_host";
    $password = "12345";

        $conn = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
            echo "Koneksi ke server gagal dilakukan.";
            exit();
        }

        $query = "update gallery set `nama_foto` = '$nama_foto', `keterangan` = '$keterangan' where `id` = '$id'";

        mysqli_query($conn, $query);
        $num = mysqli_affected_rows($conn);
        if ($num > 0) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
    }
?>