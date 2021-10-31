<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];


// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah email dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "admin") {

		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");

		// cek jika user login sebagai doktor
	} else if ($data['level'] == "doktor") {
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "doktor";
		// alihkan ke halaman dashboard doktor
		header("location:halaman_doktor.php");

		// cek jika user login sebagai user
	} else if ($data['level'] == "user") {
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard user
		header("location:halaman_user.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
} else {
	header("location:index.php?pesan=gagal");
}
