<?php
    if (isset($_POST["btnSubmit"])) {
        $id = $_POST["id"];
        $file_pdf = $_POST["file_pdf"];

        $dbname = "gabipusa_gabidb";
        $host = "localhost";
        $username = "gabipusa_host";
        $password = "12345";

        $conn = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
            echo "Koneksi ke server gagal dilakukan.";
            exit();
        }

        $query = "update artikel set `file_pdf` = '$file_pdf' where `id` = '$id'";

        mysqli_query($conn, $query);
        $num = mysqli_affected_rows($conn);
        if ($num > 0) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
    }
?>