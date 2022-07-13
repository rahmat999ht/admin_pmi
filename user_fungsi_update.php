<?php
include 'koneksi.php';
if (isset($_POST)) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $jkl = $_POST['jkl'];
    $golongan = $_POST['golongan'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    $almat = $_POST['almat'];
    $usia = $_POST['usia'];
    $pmi_id = $_POST['pmi_id'];

    // var_dump($name);

    $sql = "UPDATE `users` SET `name` = '$name', `jkl` = '$jkl',`golongan` = '$golongan',`email` = '$email',`password` = '$password',`type` = '$type',`almat` = '$almat', `usia` = '$usia',`pmi_id` = '$pmi_id' WHERE `id` = '$id' ";
    
    $result = $conn->query($sql);

    if ($result) {
        header("location:user_list.php?alert=updated successfully");
    } else {
        header("location:user_list.php?alert=Error updating record") . mysqli_error($conn);
    }
}
    