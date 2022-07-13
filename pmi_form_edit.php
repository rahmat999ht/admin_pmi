<?php
include 'sidebar.php';
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM pmi WHERE id = '$_GET[id]'");
while ($d = mysqli_fetch_array($data)) {
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
                    <form method="POST" action="pmi_fungsi_update.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="id">ID: <?php echo $d[0]; ?></label>
                            <input type="text" id="id" name="id" value="<?php echo $d[0]; ?>" style="display:none">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <div class="form-group">
                            <label for="name">Nama PMI :</label><br>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nama PMI" value="<?= $d['name']; ?>">
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
}
?>
</div>
</div>
</div>

<?php
include 'footer.php';
?>