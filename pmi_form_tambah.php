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
        <h1 class="text-center">Info Tempat PMI</h1>
        <!-- Awal card -->
        <div class="card mt-3">
            <div style="font-family: cursive;" class="card-header bg-primary text-white">
                Form Insert PMI
            </div>
            <div class="card-body">
                <form action="pmi_fungsi_tambah.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nama PMI :</label><br>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama PMI">
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