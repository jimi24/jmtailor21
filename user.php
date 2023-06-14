<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
if ($aksi == "edit") {
    include "user_edit.php";
} else {
    ?>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-primaryx" style="color:black" ;>Manajemen Data User</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primaryx" style="color:black" ;>
                    Data User
                </h6>
            </div>
            <div class="card-body">
                <a href="register.php" class="btn btn-custom">
                    <i class="fas fa-plus"></i> Registrasi Admin Baru
                </a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="30">ID</th>
                                <th width="150">Username</th>
                                <th width="150">Full Name</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = "SELECT * FROM user";
                            $query = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($query)) {
                                $link_hapus = "user_delete.php?id=$row[id]";
                                $link_edit = "admin.php?menu=user&aksi=edit&id=$row[id]";

                                ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                    </td>
                                    <td>
                                        <?= $row['username']; ?>
                                    </td>
                                    <td>
                                        <?= $row['fullname']; ?>
                                    </td>

                                    <td>
                                        <a href="<?= $link_edit; ?>" class="btn" style="color: white; background: #466d1d">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= $link_hapus; ?>" class="btn" style="color: white; background: #c01605"
                                            onclick="return confirm('Do you want to delete this user?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
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