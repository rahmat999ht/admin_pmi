<?php
include 'koneksi.php';
// include 'fungsi.php';
$id = $_GET['id'];
$query = "DELETE from users where id='$id'";
mysqli_query($conn, $query);
header("location:user_list.php");
