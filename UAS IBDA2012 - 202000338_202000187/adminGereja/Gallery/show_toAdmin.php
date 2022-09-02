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
    <a href="formUpload.php">Insert Photo</a>

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

    $query = "SELECT * FROM gallery order by id";
    $result = mysqli_query($conn, $query);

    if ($result) {
    ?>

        <h4><u>Data Gallery</u></h4>
        <form action="delete.php" method="post">
        <table border="1">
            <tr>
                <th></th>
                <th width="100">ID</th>
                <th width="100">Lokasi Foto</th>
                <th width="100">Keterangan</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_row($result)) {
            ?>
                <tr><?php
                    $id = $row[0];
                    $nama_foto = $row[1];
                    $keterangan = $row[2];
                    ?>
                    <td><input name="data[]" type="checkbox" value="<?php echo $id;?>"></td>
                    <td><?php echo $id; ?></td>
                    <td><a href="form_updateItem.php?id=<?php echo $id;?>">
                        <?php echo $nama_foto; ?></a></td>
                        <td><?php echo $keterangan; ?></td>
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
    <embed src="../uploadPDF/tes1.pdf" width="800px" height="2100px" />
    <?php
        mysqli_free_result($result);
    }
    mysqli_close($conn);
    ?>
</body>

</html>