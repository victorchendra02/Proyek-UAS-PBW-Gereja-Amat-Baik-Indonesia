<?php
if (isset($_POST["btnSubmit"])) {
  $data = $_POST["data"];

    $dbname = "gabipusa_gabidb";
    $host = "localhost";
    $username = "gabipusa_host";
    $password = "12345";

        $conn = mysqli_connect($host, $username, $password, $dbname);
        if (mysqli_connect_errno()) {
            echo "Koneksi ke server gagal dilakukan.";
            exit();
        }

        for($i=0; $i < sizeof($data); $i++){
            $query ="delete from gallery where id='$data[$i]'";
            mysqli_query($conn, $query);
        }

        $num = mysqli_affected_rows($conn);

        if ($num>0){
            echo "Data yang kamu pilih sudah dihapus.";
            ?>
             <br><br><a href="show_toAdmin.php">Lihat perubahan</a>
             <?php
             } else{ echo "Penghapusan data gagal dilakukan.";
            
    }
}
    ?>
        