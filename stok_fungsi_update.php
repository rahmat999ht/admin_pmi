<?php
include 'koneksi.php';
if (isset($_POST)) {

    $id = $_POST['id'];
    $golongan = $_POST['golongan'];
    $stock = $_POST['stock'];
    $pmi_id = $_POST['pmi_id'];


    $sql = "UPDATE stock SET `golongan` = '$golongan', `stock` = '$stock', `pmi_id` = '$pmi_id' WHERE `id` ='$id' ";
    // var_dump($sql);
    // die;
    $result = $conn->query($sql);

    if ($result) {
        header("location:stok_list.php?alert=updated successfully");
    } else {
        header("location:stok_list.php?alert=Error updating record") . mysqli_error($conn);
    }
}
