<?php
include 'sidebar.php';
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<body>
    <div class="container">
        <h1 class="text-center">PMI</h1>
        <!-- Awal card -->
        <div class="card mt-3">
            <div style="font-family: cursive;" class="card-header bg-primary text-white">
                Form Update PMI
            </div>
            <div class="card-body">
                <form method="POST" action="user_fungsi_update.php" enctype="multipart/form-data">
                <input type="text" name="id" class="form-control" id="id" value="<?= $id;?>" hidden>

                    <div class="form-group">
                        <label for="name">Nama :</label><br>
                        <input type="text" name="name" class="form-control" id="name" value="<?= $d['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="jkl">Jenis Kelamin :</label><br>
                        <input type="text" name="jkl" class="form-control" id="jkl" value="<?= $d['jkl']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia :</label><br>
                        <input type="text" name="usia" class="form-control" id="usia" value="<?= $d['usia']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="golongan">Golongan Darah :</label><br>
                        <select name="golongan" id="golongan" value="<?php echo $d['golongan']; ?>">
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
                        <input type="text" name="email" class="form-control" id="email" value="<?= $d['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password :</label><br>
                        <input type="text" name="password" class="form-control" id="password" value="<?= $d['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="type">Type :</label><br>
                        <input type="text" name="type" class="form-control" id="type" value="<?= $d['type']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="almat">Alamat :</label><br>
                        <input type="text" name="almat" class="form-control" id="almat" value="<?= $d['almat']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="pmi_id">ID PMI :</label><br>
                        <select name="pmi_id" value="<?php echo $d['pmi_id']; ?>" id="pmi_id">
                            <?php
                            $pmi = mysqli_query($conn, 'SELECT * FROM pmi');
                            while ($data = mysqli_fetch_array($pmi)) {
                            ?>
                                <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                            <?php
                            } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning" name="save" value="save">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Card -->

    <script type="text/javascript" src="jss/bootstrap.min.js"></script>
</body>
<?php
?>
</div>
</div>
</div>

<?php
include 'footer.php';
?>