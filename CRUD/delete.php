<?php
include_once("config.php");

$id_karyawan = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM karyawan WHERE id_karyawan=$id_karyawan");

header("Location:index.php")
?>