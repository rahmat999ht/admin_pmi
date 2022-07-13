<?php
include 'sidebar.php';
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Info Pendakian Gunung</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">PMI</h1>

        <!-- Awal card -->
        <div class="card mt-3">
            <div style="font-family: cursive;" class="card-header bg-primary text-white">
                Form Insert Users
            </div>
            <div class="card-body">
                <form action="user_fungsi_tambah.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nama :</label><br>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="jkl">Jenis Kelamin :</label><br>
                        <input type="text" name="jkl" class="form-control" id="jkl" placeholder=" L  or  P ">
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia :</label><br>
                        <input type="text" name="usia" class="form-control" id="usia" placeholder="Usia">
                    </div>
                    <div class="form-group">
                        <label for="golongan">Golongan Darah :</label><br>
                        <select name="golongan" id="golongan">
                            <option selected value="">Pilih GolDar </option>
                            <?php
                            $gol = mysqli_query($conn, 'SELECT * FROM goldar');
                            while ($data = mysqli_fetch_array($gol)) {
                            ?>
                                <option value="<?= $data['id_goldar'] ?>"><?= $data['goldar'] ?></option>
                            <?php
                            } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label><br>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password :</label><br>
                        <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="type">Type :</label><br>
                        <input type="text" name="type" class="form-control" id="type" placeholder=" user  or  admin ">
                    </div>
                    <div class="form-group">
                        <label for="almat">Alamat :</label><br>
                        <input type="text" name="almat" class="form-control" id="almat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="pmi_id">ID PMI :</label><br>
                        <select name="pmi_id" id="pmi_id">
                            <option selected value="">Pilih PMI</option>
                            <?php
                            $pmi = mysqli_query($conn, 'SELECT * FROM pmi');
                            while ($data = mysqli_fetch_array($pmi)) {
                            ?>
                                <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                            <?php
                            } ?>
                        </select>
                    </div>
                    <input type="submit" value="Daftar" class="btn btn-success" name="simpan"></input>
                </form>

            </div>
        </div>
    </div>
    <!-- Akhir Card -->

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>