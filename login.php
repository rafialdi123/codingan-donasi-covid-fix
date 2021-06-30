<!DOCTYPE html>
<html>
<head>
	<title>tu.skul-login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	
    

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	
 
	<div class="kotak_login">
		<a href="index.php"><img class="logo" src="logo/tu.png" ></a>
		<p class="tega">LOGIN</p>
 
		<form action="cek_login.php" method="post">
			<center><label><b>Nama Pengguna</b></label></center>
			<input type="text" name="Nama" class="form_login" placeholder="Username .." required="required">
 
			<center><label><b>Kata Sandi</b></label></center>
			<input type="password" name="sandi" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="MASUK" >
 
			<br/>
			<br/>
			<center>
				<a class="link">belum punya akun ? daftar <a class="link" href="add.php"><b>disini</b></a></a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>