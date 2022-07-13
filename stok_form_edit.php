<?php
include 'sidebar.php';
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM stock WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<body>
    <div class="container">
        <h1 class="text-center">PMI</h1>
        <!-- Awal card -->
        <div class="card mt-3">
            <div style="font-family: cursive;" class="card-header bg-primary text-white">
                Form Update Stock
            </div>
            <div class="card-body">
                <form method="POST" action="stok_fungsi_update.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id">ID: <?php echo $d['id']; ?></label>
                        <input type="text" id="id" name="id" value="<?php echo $d['id']; ?>" style="display:none">
                    </div>
                    <!-- <input type="hidden" name="id" value="<\?php echo $d['id']; ?>"> -->
                    <div class="form-group">
                        <label for="golongan">golongan Darah :</label><br>
                        <select name="golongan" value="<?php echo $d['golongan']; ?>" id="golongan">
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
                        <label for="stock">stock :</label><br>
                        <input type="text" name="stock" class="form-control" id="stock" value="<?= $d['stock']; ?>">
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