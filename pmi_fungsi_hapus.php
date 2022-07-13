<?php
include 'koneksi.php';
// include 'fungsi.php';
$id = $_GET['id'];
$query = "DELETE from pmi where id='$id'";
mysqli_query($conn, $query);
header("location:index.php");
