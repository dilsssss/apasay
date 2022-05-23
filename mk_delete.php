<?php
//koneksi database
include 'koneksi.php';

// menangkap data url
$kd_mk = $_GET['kd_mk'];

//menghapus
mysqli_query($koneksi, "DELETE FROM tbl_mk WHERE kd_mk='$kd_mk'");

header("location:mk_list.php");

?>