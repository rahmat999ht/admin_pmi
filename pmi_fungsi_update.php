<?php
include 'koneksi.php';
if (isset($_POST)) {

    $id = $_POST['id'];
    $name = $_POST['name'];
  
    var_dump($name);

    $sql = "UPDATE `pmi` SET `name` = '$name', `lat` = '$lat', `long` = '$long' WHERE `pmi`.`id` = $id;";
    $result = $conn->query($sql);

    if ($result) {
        header("location:index.php?alert=updated successfully");
    } else {
        header("location:index.php?alert=Error updating record") . mysqli_error($conn);
    }
}
