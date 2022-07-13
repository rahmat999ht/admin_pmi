<?php
include 'koneksi.php';
// $id = $_POST['id_gunung'];
if (isset($_POST['simpan'])) {

    // $id = $_POST['id'];
    $golongan = $_POST['golongan'];
    $stock = $_POST['stock'];
    $pmi_id = $_POST['pmi_id'];

    $sql = "INSERT INTO `stock` (`id`, `golongan`, `stock`, `pmi_id`) VALUES (NULL, '$golongan', '$stock', '$pmi_id');";
    $result = $conn->query($sql);

    if ($result) {
        header("location:stok_list.php?alert=Tambah Provinsi berhasil");
    } else {
        header("location:stok_list.php?alert=Tambah Provinsi gagal");
    }
}
