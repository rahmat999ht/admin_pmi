<?php
include 'koneksi.php';
// $id = $_POST['id_gunung'];
if (isset($_POST['simpan'])) {

    // $id = $_POST['id'];
    $name = $_POST['name'];
    $jkl = $_POST['jkl'];
    $golongan = $_POST['golongan'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $almat = $_POST['almat'];
    $usia = $_POST['usia'];
    $pmi_id = $_POST['pmi_id'];

    $sql = "INSERT INTO `users` (`id`, `name`, `jkl`, `email`, `password`, `golongan`, `type`, `pmi_id`, `almat`, `usia`) VALUES (NULL, '$name', '$jkl', '$email', '$password', '$golongan', '$type', '$pmi_id', '$almat', '$usia')";
    $result = $conn->query($sql);

    if ($result) {
        header("location:user_list.php?alert=Tambah Provinsi berhasil");
    } else {
        header("location:user_list.php?alert=Tambah Provinsi gagal");
    }
}
