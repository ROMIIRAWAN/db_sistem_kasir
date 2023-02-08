<?php
$pengguna=$_POST["nama"];
$password=$_POST["sandi"];
include "koneksi.php";
$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna WHERE nama_pengguna="'.$pengguna.'" AND sandi_pengguna="'.$password.'"');

	// ini nanti di redirect ke halaman utama
	header("location:lihat_pengguna.php");

