<?php
include 'sidebar.php';
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel Users</h1>
        <button type="button" class="btn btn-primary">
            <a href="user_form_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm"></i> Tambah Data</a>
        </button>
        <?php
        ?>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>GolDar</th>
                            <th>Usia</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        $no = 1;
                        $gunung = mysqli_query($conn, 'SELECT users.id,users.name,users.jkl, usia,goldar.goldar FROM users INNER JOIN goldar ON users.golongan = goldar.id_goldar');
                        while ($data = mysqli_fetch_array($gunung)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['name'] ?></td>
                                    <td><?php echo $data['jkl'] ?></td>
                                    <td><?php echo $data['goldar'] ?></td>
                                    <td><?php echo $data['usia'] ?></td>

                                    <td>
                                        <a href="user_info.php?id=<?php echo $data['id']; ?>" class="btn btn-info ">Detail</a>
                                        <a href="user_form_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success ">Edit</a>
                                        <a href="user_fungsi_hapus.php?id=<?php echo $data['id'];  ?>" class="btn btn-danger " role="button" onclick="return confirm ('Yakin Hapus?')">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php
                        } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>