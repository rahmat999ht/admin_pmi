<?php
include 'koneksi.php';
// $id = $_POST['id_gunung'];
if (isset($_POST['simpan'])) {

    // $id = $_POST['id'];
    $name = $_POST['name'];

    $sql = "INSERT INTO `pmi` (`id`, `name`,) VALUES (NULL, '$name');";
    $result = $conn->query($sql);

    if ($result) {
        header("location:index.php?alert=Tambah PMI berhasil");
    } else {
        header("location:index.php?alert=Tambah PMI gagal");
    }
} else {
    header("location:index.php?alert=Tambah Provinsi gagal");
}
