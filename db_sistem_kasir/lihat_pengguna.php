<!DOCTYPE html>
<html>
<head>
	<title>Halaman beranda</title>
	<style type="text/css">
		ul {  
			list-style-type: none;  
		}
		a:link { text-decoration: none; }
	</style>
</head>
<body >
	<table  width="100%">
		<tr>
				<h1>SELAMAT DATANG DIHALAMAN RUMAH SAYA</h1>
			
		</tr>
		<tr>
			<td width="25%">
			<b><u>MENU SEBELAH KIRI</u></b><br>
			<ul>
				<li>
					<a href="lihat_pengguna.php">Lihat Pengguna</a>
				</li>
				<li>
					<a href="tambah_pengguna.php">Tambah Pengguna</a>
				</li>
				<li>
					<a href="hapus_pengguna.php">Hapus Pengguna</a>
				</li>
				<li>
					<a href="edit_pengguna.php">Edit Pengguna</a>
				</li>
			</ul>
			</td>
			<td>
			<b><u>LIST PENGGUNA</u></b><br>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna');
				?>
				<table border="1">
					
					<tr>
					
						<td>
							<b>
							No
						</b>
						</td>
						<td>
							<b>
							Nama 
						</b>
						</td>
						<td>
							<b>
							Sandi
						</b>
						</td>
							<td>
							<b>
							aksi
						</td>
					</b>
					</tr>
						

				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['id_pengguna'];
					echo"</td><td>";
					echo $row['nama_pengguna'];
					echo"</td><td>";
					echo $row['sandi_pengguna'];
					echo"</td>
					<td>";
					echo"
						<a href='hapus.php?apanih=".$row['nama_pengguna']."'>hapus</a>
					";
					echo "</td> <td>";
					echo"
						<a href='update_data.php?nama=".$row['nama_pengguna']."&sandi=".$row['sandi_pengguna']."		'>edit</a>
					";
				}
			?>
			</table>
			<br>
			<button><a  href="tambah_pengguna.php">Tambah Pengguna</a></button>
			</td>
		</tr>
	</table>
</body>
</html>