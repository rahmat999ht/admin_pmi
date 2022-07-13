<?php
include 'sidebar.php';
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM pmi ORDER BY id DESC");
?>
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel PMI</h1>
        <button type="button" class="btn btn-primary">
            <a href="pmi_form_tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                            <th>Nama Rumah Sakit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        $no = 1;
                        $pmi = mysqli_query($conn, 'SELECT * FROM pmi');
                        while ($data = mysqli_fetch_array($pmi)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['name'] ?></td>
                                    
                                    <td>
                                        <a href="pmi_form_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success ">Edit</a>
                                        <a href="pmi_fungsi_hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger " role="button" onclick="return confirm ('Yakin Hapus?')">Hapus</a>
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