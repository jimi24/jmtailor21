<?php
include "config/connection.php";
$id = $_GET['id'];

$sql = "DELETE FROM produk WHERE id='$id' ";
$query = mysqli_query($con, $sql);

$url = "admin.php?menu=produk";
$pesan = "Produk berhasil dihapus!";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>