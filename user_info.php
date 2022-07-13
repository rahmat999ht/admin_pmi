<?php
include 'sidebar.php';
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Users</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table border-color" id="dataTable" width="100%" cellspacing="0">

                    <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        $no = 1;
                        $gunung = mysqli_query($conn, 'SELECT users.name,users.jkl,users.email,users.password,goldar.goldar,users.type,users.almat,users.usia ,pmi.name as "pmi_name" FROM users JOIN goldar ON users.golongan = goldar.id_goldar JOIN pmi ON pmi.id = users.pmi_id WHERE users.id = ' . $_GET['id']);
                        while ($data = mysqli_fetch_array($gunung)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td>
                                        Nama : <BR><?php echo $data['name'] ?><BR><BR>
                                        Jenis Kelamin : <BR><?php echo $data['jkl'] ?><BR><BR>
                                        Usia : <BR><?php echo $data['usia'] ?><BR><BR>
                                        GolDar : <BR><?php echo $data['goldar'] ?><BR><BR>
                                        Email : <BR><?php echo $data['email'] ?><BR><BR>
                                        Password : <BR><?php echo $data['password'] ?><BR><BR>
                                        Type : <BR><?php echo $data['type'] ?><BR><BR>
                                        Alamat : <BR><?php echo $data['almat'] ?><BR><BR>
                                        PMI : <BR><?php echo $data['pmi_name'] ?><BR><BR>
                                </tr>
                            </tbody>
                        <?php $no++;
                        } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>