<?php 
$id=$_GET['apanih'];
include "koneksi.php";
mysqli_query($konek,'DELETE FROM tb_pengguna WHERE nama_pengguna="'.$id.'"');
header("location:lihat_pengguna.php");