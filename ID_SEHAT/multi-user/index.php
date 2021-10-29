<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Multi User Level Dengan PHP dan MySQLi - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>Halaman Login</h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>email dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>email</label>
			<input type="text" name="email" class="form_login" placeholder="email .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a href="register.php">register</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>