<?php
include_once("config.php");

if(isset($_POST['update'])) {
	$id_karyawan = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	$jns_kelamin = $_POST['jenis_kelamin'];
	$tgl_lhr = $_POST['tanggal_lahir'];
	$tmp_lhr = $_POST['tempat_lahir'];

	$result = mysqli_query($mysqli, "UPDATE karyawan SET nama='$nama', email='$email', telepon='$telepon', alamat='$alamat', jenis_kelamin='$jns_kelamin', tanggal_lahir='$tgl_lhr', tempat_lahir='$tmp_lhr' WHERE id_karyawan=$id_karyawan");

	if($result){
		header("Location:index.php");
	}
}
?>
<?php
$id_karyawan = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE id_karyawan=$id_karyawan");

while($user_data = mysqli_fetch_array($result)) {
	$nama = $user_data['nama'];
	$email = $user_data['email'];
	$telepon = $user_data['telepon'];
	$alamat = $user_data['alamat'];
	$jns_kelamin = $user_data['jenis_kelamin'];
	$tmp_lhr = $user_data['tempat_lahir'];
	$tgl_lhr = $user_data['tanggal_lahir'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Edit Data Karyawan</title>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<a href="index.php">Home</a><br><br>

			<form name="update_user" method="post" action="edit.php">
				<table border="0">
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama" value="<?= $nama ?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?= $email ?>"></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td><input type="number" name="telepon" value="<?= $telepon ?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat" value="<?= $alamat ?>"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><input type="radio" name="jenis_kelamin" value=1> Pria
						<input type="radio" name="jenis_kelamin" value=2> Wanita</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td><input type="text" name="tempat_lahir" value="<?= $tmp_lhr ?>"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td><input type="date" name="tanggal_lahir" value="<?= $tgl_lhr ?>"></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input type="submit" name="update" value="Update"></td>
					</tr>
				</table>
			</form>
    	</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>
</html>
