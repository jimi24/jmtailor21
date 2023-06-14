<?php
include 'config/connection.php';

$id = isset($_GET['id']) ? $_GET['id'] : "";
$id = mysqli_real_escape_string($con, $id);
$sql = "SELECT * FROM produk WHERE id='$id' ";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);
?>
<html>

<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="assets/css/styling.css" />
</head>

<body>
    <form action="produk_update.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="box form-box">
                <header>Edit Produk</header>
                <form action="">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <div class="field input">
                        <label for="nama"></label>
                        <input type="text" name="nama" id="nama" value="<?= $data['nama']; ?>" autocomplete="off" placeholder="Nama" required />
                    </div>
                    <div class="field input">
                        <label for="harga"></label>
                        <input type="number" name="harga" id="harga" value="<?= $data['harga']; ?>" autocomplete="off" placeholder="Harga" required />
                    </div>
                    <div class="field input">
                        <label for="kategori"></label>
                        <input type="kategori" name="kategori" id="kategori" value="<?= $data['kategori']; ?>" autocomplete="off" placeholder="Kategori" required />
                    </div>
                    <div class="field input">
                        <label for="image"></label>
                        <input type="file" name="image" id="image" autocomplete="off" placeholder="Gambar" />
                    </div>
                    <div class="field input">
                        <label for="deskripsi"></label>
                        <textarea type="deskripsi" name="deskripsi" id="deskripsi" value="<?= $data['description']; ?>" autocomplete="off" placeholder="deskripsi" row="5"></textarea>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" id="btn" name="submit" value="Simpan" required />
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

    .container .form-box .input input,
    textarea {
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

    textarea {
        height: 100px;
    }

    .container .form-box .link {
        margin-bottom: 15px;
    }
</style>


</html>