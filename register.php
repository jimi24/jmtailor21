<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/styling.css" />
</head>

<body>
    <form action="save_register.php" method="post">
        <div class="container">
            <div class="box form-box">
                <header>Registrasi Admin</header>
                <form action="">
                    <div class="field input">
                        <label for="username"></label>
                        <input type="text" name="username" id="username" autocomplete="off" placeholder="Username"
                            required />
                    </div>
                    <div class="field input">
                        <label for="fullname"></label>
                        <input type="fullname" name="fullname" id="fullname" autocomplete="off" placeholder="Full Name"
                            required />
                    </div>
                    <div class="field input">
                        <label for="password"></label>
                        <input type="password" name="password" id="password" autocomplete="off" placeholder="Password"
                            required />
                    </div>
                    <div class="field input">
                        <label for="confirm_password"></label>
                        <input type="password" name="confirm_password" id="confirm_password" autocomplete="off"
                            placeholder="Confirm Password" required />
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" id="btn" name="submit" value="Sign Up" required />
                    </div>
                    <div class="links">
                        Sudah punya akun? <a href="login.php">Login</a>
                    </div>
                </form>
            </div>
        </div>
</body>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 90vh;
    }

    .box {
        background: white;
        display: flex;
        flex-direction: column;
        padding: 25px 25px;
        border-radius: 20px;
        box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
            0 32px 64px -48px rgba(0, 0, 0, 0.5);
    }

    .container .form-box {
        width: 450px;
        margin: 0px 10px;
    }

    .container .form-box header {
        font-size: 25px;
        font-weight: 600;
        padding-bottom: 10px;
        border-bottom: 1px solid #e6e6e6;
        margin-bottom: 10px;
    }

    .container .form-box .field {
        display: flex;
        margin-bottom: 10px;
        flex-direction: column;
    }

    .container .form-box .input input {
        height: 40px;
        width: 100%;
        font-size: 16px;
        padding: 0 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        outline: none;
    }

    .btn {
        height: 35px;
        background: black;
        border: 0;
        border-radius: 5px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s;
        margin-top: 10px;
        padding: 0px 10px;
    }

    .btn:hover {
        opacity: 0.82;
    }

    .container .form-box .link {
        margin-bottom: 15px;
    }
</style>

<script>
    function cek_password() {
        var password = document.getElementById("password").value;
        var confirmed_password = document.getElementById("confirmed_password").value;

        if (password == confirmed_password) {
            document.getElementById("button_submit").disabled = false; //enabled
        } else {
            document.getElementById("button_submit").disabled = true; //disabled
        }
    }
</script>

</html>