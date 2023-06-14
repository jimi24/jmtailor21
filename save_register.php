<?php
include "config/connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Username apakah sudah terpakai atau belum?
    $sql_cek = "SELECT * FROM user WHERE username='$username'";
    $query_cek = mysqli_query($con, $sql_cek);
    $num_cek = mysqli_num_rows($query_cek);

    if ($num_cek == 0) {
        // Memastikan password dan konfirmasi password cocok
        if ($password === $confirm_password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (username, fullname, password) VALUES ('$username', '$fullname', '$hashed_password')";

            $query = mysqli_query($con, $sql);

            if ($query) {
                ?>
                <script>
                    alert("Registrasi Berhasil!");
                    location.href = "login.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Eror dalam menyimpan data!: <?php echo mysqli_error($con); ?>");
                    location.href = "register.php";
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert("Password tidak cocok!");
                location.href = "register.php";
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Username sudah digunakan!");
            location.href = "register.php";
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert("Invalid!");
        location.href = "register.php";
    </script>
    <?php
    exit;
}
?>