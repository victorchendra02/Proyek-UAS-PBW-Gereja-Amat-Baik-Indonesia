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

        $query = "insert into artikel values ('$id', '$file_pdf')";

        mysqli_query($conn, $query);
        $num = mysqli_affected_rows($conn);

        if ($num > 0) {
            echo "Data yang kamu simpan sudah disimpan.";
        } else {
            echo "Data gagal disimpan ke dalam database.";
        }
        ?>
        <br>
        <a href="show_toAdmin.php">Lihat database</a>
        <br>
        <a href="form_insertGallery.html">Kembali</a>
        <?php
    }
?>