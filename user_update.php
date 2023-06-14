<?php
include "config/connection.php";
$id = mysqli_real_escape_string($con, $_POST['id']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);

$sql = "UPDATE user SET username='$username',
                            fullname='$fullname',
                            password='$password'
                            WHERE id='$id'";
$query = mysqli_query($con, $sql);

$url = "admin.php?menu=user";
$pesan = "Data berhasil di-update";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>