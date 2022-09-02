<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload the photo</title>
</head>
<body>
    <a href="show_toAdmin.php">Lihat database</a>
    <br><br>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"><br><br>
        <label for="thename">Name the photo </label><br>
        <input type="text" name="thename">
        <button type="submit" name="submit">UPLOAD</button>
    </form>
    
</body>
</html>