<?php
include 'koneksi.php';
// include 'fungsi.php';
$id = $_GET['id'];
$query = "DELETE from stock where id='$id'";
mysqli_query($conn, $query);
header("location:stok_list.php");
