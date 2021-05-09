<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Add Karyawan</title>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<a href="index.php">Kembali</a><br><br>

			<form action="add.php" method="post" name="form1">
				<table width="35%">
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td><input type="number" name="telepon"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><input type="radio" name="jenis_kelamin" value=1> Pria
						<input type="radio" name="jenis_kelamin" value=2> Wanita</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td><input type="text" name="tempat_lahir"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="tanggal_lahir"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Add"></td>
					</tr>
				</table>
			</form>

			<?php
			if(isset($_POST['Submit'])) {
				$nama = $_POST['nama'];
				$email = $_POST['email'];
				$telepon = $_POST['telepon'];
				$alamat = $_POST['alamat'];
				$jns_kelamin = $_POST['jenis_kelamin'];
				$tgl_lhr = $_POST['tanggal_lahir'];
				$tmp_lhr = $_POST['tempat_lahir'];

				include_once("config.php");

				$result = mysqli_query($mysqli, "INSERT INTO karyawan(nama,email,telepon,alamat,jenis_kelamin,tanggal_lahir,tempat_lahir) VALUES('$nama','$email','$telepon','$alamat','$jns_kelamin','$tgl_lhr','$tmp_lhr')");

			echo "Karyawan berhasil ditambahkan! <a href='index.php'>View Karyawan</a>";
			}
			?>
    	</div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    
  </body>
</html>