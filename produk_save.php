<?php
include "config/connection.php";

$nama = mysqli_real_escape_string($con, $_POST['nama']);
$desc = mysqli_real_escape_string($con, $_POST['deskripsi']);
$harga = mysqli_real_escape_string($con, $_POST['harga']);
$kategori = mysqli_real_escape_string($con, $_POST['kategori']);
$image = $_FILES['image'];

$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
$nama_image = $_FILES['image']['name'];
$x = explode('.', $nama_image);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$nama_image_new = uniqid();

if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 1044070) {
        move_uploaded_file($file_tmp, 'assets/img/' . $nama_image_new . '.' . $ekstensi);
    } else {
        $url = "admin.php?menu=produk";
        $pesan = "Ukuran file terlalu besar";
        echo "<script>alert('$pesan'); location='$url'; </script>";
    }
} else {
    $url = "admin.php?menu=produk";
    $pesan = "Ekstensi file tidak diperbolehkan";
    echo "<script>alert('$pesan'); location='$url'; </script>";
}

$path = "assets/img/" . $nama_image_new . "." . $ekstensi;
$sql = "INSERT INTO produk (nama, description, harga, kategori, image) VALUES ('$nama', '$desc', '$harga', '$kategori', '$path')";
$query = mysqli_query($con, $sql);

$url = "admin.php?menu=produk";
$pesan = "Data berhasil ditambahkan";

echo "<script>alert('$pesan'); location='$url'; </script>";
