<?php
session_start();

if(isset($_SESSION['id'])){
  header('location: dashboard.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Login</title>
  <link rel="stylesheet" href="assets/css/styling.css" />
</head>

<body>
  <form action="save_login.php" method="post">
    <div class="container">
      <div class="box form-box">
        <header>Login</header>
        <form action="">
          <div class="field input">
            <label for="username"></label>
            <input type="username" name="username" id="username" autocomplete="off" placeholder="Username" required />
          </div>
          <div class="field input">
            <label for="password"></label>
            <input type="password" name="password" id="password" autocomplete="off" placeholder="Password" required />
          </div>
          <div class="field">
            <input type="submit" class="btn" name="submit" value="Login" required />
          </div>
        </form>
      </div>
    </div>
</body>

</html>