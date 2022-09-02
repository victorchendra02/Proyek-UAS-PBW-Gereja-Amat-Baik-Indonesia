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

    $query = "SELECT tahun, data_jemaat, data_kehadiran, cabang from jemaat where id = '$_id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_row($result);
    }
    ?>

    <form action="update.php" method="post">
        
        <strong>ID :</strong><br>
        <input type="text" name="id" value="<?php echo $_id;?>"><br>
        <strong>Tahun :</strong><br>
        <input type="text" name="tahun" size="30" maxlength="8" value="<?php echo $row[0]; ?>"><br>
        <strong>Data Jemaat :</strong><br>
        <input type="text" name="jemaat" size="30" maxlength="8" value="<?php echo $row[1]; ?>"><br>
        <strong>Data Kehadiran :</strong><br>
        <input type="text" name="kehadiran" size="30" maxlength="8" value="<?php echo $row[2]; ?>"><br>
        <strong>Cabang :</strong><br>
        <input type="text" name="cabang" size="30" maxlength="1" value="<?php echo $row[3]; ?>"><br>
        <input type="submit" name="btnSubmit" value="Simpan">
    </form>
</body>

</html>