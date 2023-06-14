<?php
include "config/connection.php";
$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id='$id' ";
$query = mysqli_query($con, $sql);

$url = "admin.php?menu=user";
$pesan = "User berhasil dihapus!";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>