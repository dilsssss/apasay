<?php
//koneksi database
include 'koneksi.php';

// menangkap data url
$kd_dosen = $_GET['kd_dosen'];

//menghapus
mysqli_query($koneksi, "DELETE FROM tbl_dosen WHERE kd_dosen='$kd_dosen'");

header("location:dosen_list.php");



?>