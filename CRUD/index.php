<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM karyawan ORDER BY id_karyawan DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Homepage</title>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<a href="add.php">Add Karyawan</a><br><br>
	
			<table width="90%" class="table table-bordered table-striped">
				<tr>
					<th>Nama</th> <th>Email</th> <th>Telepon</th> <th>Alamat</th> <th>Jenis Kelamin</th> <th>Tempat Lahir</th> <th>Tanggal Lahir</th> <th>Update</th>
				</tr>
				<?php
				while ($user_data = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>".$user_data['nama']."</td>";
					echo "<td>".$user_data['email']."</td>";
					echo "<td>".$user_data['telepon']."</td>";
					echo "<td>".$user_data['alamat']."</td>";
					echo "<td>".$user_data['jenis_kelamin']."</td>";
					echo "<td>".$user_data['tempat_lahir']."</td>";
					echo "<td>".$user_data['tanggal_lahir']."</td>";
					echo "<td><center><a href='edit.php?id=$user_data[id_karyawan]'>Edit</a> | <a href='delete.php?id=$user_data[id_karyawan]'>Delete</a></center></td></tr>";
				}
				?>
			</table>
		</div>
	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>