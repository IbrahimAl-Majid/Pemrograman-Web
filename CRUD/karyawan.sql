create database crud_db;

use crud_db;

CREATE TABLE `karyawan` (
	`id_karyawan` int(10) NOT NULL auto_increment,
	`nama` varchar(255),
	`email` varchar(255),
	`telepon` varchar(15),
	`alamat` text,
	`jenis_kelamin` enum('pria', 'wanita'),
	`tempat_lahir` varchar(100),
	`tanggal_lahir` date,
	PRIMARY KEY (`id_karyawan`)
);