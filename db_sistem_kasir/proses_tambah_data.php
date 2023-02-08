<?php
$pengguna=$_POST["namaku"];
$password=$_POST["katasandiku"];
include "koneksi.php";
$kueri=mysqli_query($konek,"INSERT INTO tb_pengguna (nama_pengguna,sandi_pengguna) VALUE ('$pengguna','$password')");
if($kueri){
	// ini nanti di redirect ke halaman utama
	header("location:lihat_pengguna.php");
}else{
		// ini nanti di redirect ke halaman login
	header("location:tambah_pengguna.php");	
}