<?php
$server = "localhost";
$user = "root";
$password = "blazing12";
$db = "jm_tailor";

$con = mysqli_connect($server, $user, $password, $db);

if (!$con) {
    die("gagal koneksi ke database");
}
;

//echo "Koneksi ke database berhasil";

//mysqli_close();
