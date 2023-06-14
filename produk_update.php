<?php
include "config/connection.php";

$id = mysqli_real_escape_string($con, $_POST['id']);
$nama = mysqli_real_escape_string($con, $_POST['nama']);
$desc = mysqli_real_escape_string($con, $_POST['deskripsi']);
$harga = mysqli_real_escape_string($con, $_POST['harga']);
$kategori = mysqli_real_escape_string($con, $_POST['kategori']);
$image = $_FILES['image'];

$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);
$image_name = $data['image'];

if($image['name']){
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
    
    $image_name = $path;
}

$sql = "UPDATE produk SET nama='$nama', description='$desc', harga='$harga', kategori='$kategori', image='$image_name' WHERE id=$id";
$query = mysqli_query($con, $sql);

$url = "admin.php?menu=produk";
$pesan = "Data berhasil update";

echo "<script>alert('$pesan'); location='$url'; </script>";
