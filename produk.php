<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
if ($aksi == "edit") {
    include "produk_edit.php";
} else {
?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-primaryx" style="color:black" ;>Manajemen Data Produk</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primaryx" style="color:black" ;>
                    Data User
                </h6>
            </div>
            <div class="card-body">
                <a href="produk_create.php" class="btn btn-custom">
                    <i class="fas fa-plus"></i> Tambah Produk Baru
                </a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Produk</td>
                                <td>Harga</td>
                                <td>Desc</td>
                                <td>Kategori</td>
                                <td>Image</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($con, "SELECT * FROM produk");
                            $no = 1;
                            while ($result = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $result['nama']; ?></td>
                                    <td><?= $result['harga']; ?></td>
                                    <td><?= $result['description']; ?></td>
                                    <td><?= $result['kategori']; ?></td>
                                    <td>
                                        <img src="<?= $result['image']; ?>" width="100px" alt="">
                                    </td>
                                    <td>
                                        <a href="admin.php?menu=produk&aksi=edit&id=<?= $result['id']; ?>" class="btn btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="produk_delete.php?id=<?= $result['id']; ?>" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<?php
}
?>