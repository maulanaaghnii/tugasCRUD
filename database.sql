create database dataDosen_db;


use dataDosen_db;

CREATE TABLE `users` (
 `id` int(11) NOT NULL auto_increment,
 `npp_dosen` varchar(20),
 `nama_dosen` varchar(50),
 `jabatan_dosen` varchar(20),
 PRIMARY KEY (`id`)
);
