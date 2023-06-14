<?php
session_start();
include("config/connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mendapatkan username dan password yang dikirimkan melalui formulir login
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = $_POST['password'];

    // Query untuk mendapatkan data user berdasarkan username
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $query = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($query);

    // Memeriksa keberhasilan query dan verifikasi password
    if ($result && password_verify($password, $result['password'])) {
        // Autentikasi berhasil
        $_SESSION['id'] = $result['id'];
        header("Location: admin.php");
        exit();
    } else {
        // Autentikasi gagal
        ?>
        <script>
            alert("Autentikasi Gagal!");
            location.href = "login.php";
        </script>
        <?php
        exit;
    }
} else {
    ?>
    <script>
        alert("Invalid!");
        location.href = "login.php";
    </script>
    <?php
    exit;
}

?>