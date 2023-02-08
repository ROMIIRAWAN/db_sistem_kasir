<?php 
include "koneksi.php";
//$id=$_POST['bety_natalia_nahampun'];
$nama=$_POST['nama'];
$password=$_POST['boleeeh'];
mysqli_query($konek,"UPDATE tb_pengguna SET nama_pengguna='$nama' WHERE sandi_pengguna='$password' ");
//echo "UPDATE login1 SET nama_pengguna='".$nama."',sandi_pengguna='".$password."' WHERE id_pengguna='".$id."'";
header("location:lihat_pengguna.php");