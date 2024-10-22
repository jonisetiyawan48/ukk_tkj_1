<?php

session_start();

include 'koneksi.php';

$nama = $_POST['nama'];
$pesan = $_POST['pesan'];
$nama = mysqli_real_escape_string($conn, $nama);

$nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
$pesan = htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8');
$insert = mysqli_query($conn, "INSERT INTO guestbook (id, tanggal, nama, pesan) VALUES(NULL, NOW(), '{$nama}', '{$pesan}')");

if ($insert) {
	echo $insert;
}


//tambahkan atau perbaiki script diantara dibaris 7 sampai  15
//sql code injection  di login guestbook bagian pesan   '); DROP TABLE guestbook; --
