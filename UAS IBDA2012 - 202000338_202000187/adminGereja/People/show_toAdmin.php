<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Database</title>
</head>

<body>

    <a href="form_insertGallery.html">Insert DB foto</a>

    <h2>Tampil Isi Data Buat Admin</h2>

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

    $query = "SELECT * FROM jemaat order by id";
    $result = mysqli_query($conn, $query);

    if ($result) {
    ?>

        <h4><u>Data Jemaat</u></h4>
        <form action="delete.php" method="post">
        <table border="1">
            <tr>
                <th></th>
                <th width="100">ID</th>
                <th width="100">Tahun</th>
                <th width="100">Data Jemaat</th>
                <th width="100">Data Kehadiran</th>
                <th width="100">Cabang</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_row($result)) {
            ?>
                <tr><?php
                    $id = $row[0];
                    $tahun = $row[1];
                    $jemaat = $row[2];
                    $kehadiran = $row[3];
                    $cabang = $row[4];
                    ?>
                    <td><input name="data[]" type="checkbox" value="<?php echo $id;?>"></td>
                    <td><?php echo $id; ?></td>
                    <td><a href="form_updateItem.php?id=<?php echo $id;?>">
                        <?php echo $tahun; ?></a></td>
                        <td><?php echo $jemaat; ?></td>
                        <td><?php echo $kehadiran; ?></td>
                        <td><?php echo $cabang; ?></td>
                </tr>
            <?php } ?>
        </table>
        <br>
    <strong>Keterangan:</strong> Klik link yang tersedia untuk mengubah data!
    <br>
    <strong>Keterangan:</strong> Check kotak pada data yang akan dihapus!

    <br><br>
    <input type="submit" name="btnSubmit" value="Hapus">
    </form>
    <?php
        mysqli_free_result($result);
    }
    mysqli_close($conn);
    ?>
</body>

</html>