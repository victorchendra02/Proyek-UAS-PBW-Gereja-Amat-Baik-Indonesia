<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <h2>Form Update Data</h2>
    <?php
    $_id = $_GET["id"];

    $dbname = "gabipusa_gabidb";
    $host = "localhost";
    $username = "gabipusa_host";
    $password = "12345";

    $conn = mysqli_connect($host, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Koneksi ke server gagal dilakukan.";
        exit();
    }

    $query = "SELECT nama_foto, keterangan from gallery where id = '$_id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_row($result);
    }
    ?>

    <form action="update.php" method="post">
        
        <strong>ID:</strong><br>
        <input type="text" name="id" value="<?php echo $_id;?>"><br>
        <strong>Lokasi foto:</strong><br>
        <input type="text" name="nama_foto" size="30" maxlength="255" value="<?php echo $row[0]; ?>"><br>
        <strong>Keterangan:</strong><br>
        <input type="text" name="keterangan" size="30" maxlength="1000" value="<?php echo $row[1]; ?>"><br>
        <input type="submit" name="btnSubmit" value="Simpan">
    </form>
</body>

</html>