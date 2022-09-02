<?php
$user = $_POST['user'];
$pswd = $_POST['pswd'];

session_start();

if ($user == "") {
    header("location: ../pages/login_admin.php?pesan=kosong1", true, 301);
    exit();
}
if ($pswd == "") {
    header("location: ../pages/login_admin.php?pesan=kosong2", true, 301);
    exit();
}

$dbname = "gabipusa_gabidb";
$host = "localhost";
$username = "gabipusa_host";
$password = "12345";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "Koneksi ke server gagal dilakukan.";
    exit();
}

$query = "select * from admin where username='$user' and password='$pswd'";
mysqli_query($conn, $query);

$num = mysqli_affected_rows($conn);

if ($num > 0) {
    if ($_SESSION["captcha"] == $_POST["valcaptcha"]) {
        header("location: adminpage.html", true, 301);
        exit();
    } else {
        header("location: ../pages/login_admin.php?pesan=invalid", true, 301);
        exit();
    }
} else {
    header("location: ../pages/login_admin.php?pesan=input", true, 301);
    exit();
}
