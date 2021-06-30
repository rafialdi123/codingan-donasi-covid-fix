<?php 
// mengaktifkan session php


// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['Nama'];
$pass = $_POST['sandi'];

$hash = hash('sha256',$pass);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from akun where Nama_Pengguna='$nama' and password='$hash'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


$remail = mysqli_query($koneksi,"select email from akun where Nama_Pengguna='$nama' and password='$hash'");
$rfull = mysqli_query($koneksi,"select Nama from akun where Nama_Pengguna='$nama' and password='$hash'");
$rfoto = mysqli_query($koneksi,"select photo from akun where Nama_Pengguna='$nama' and password='$hash'");
$rno = mysqli_query($koneksi,"select No_hp from akun where Nama_Pengguna='$nama' and password='$hash'");

$email = mysqli_fetch_assoc($remail);
$full = mysqli_fetch_assoc($rfull);
$foto= mysqli_fetch_assoc($rfoto);
$no = mysqli_fetch_assoc($rno);


if($cek > 0){
	session_start();
	$_SESSION['Nama_Pengguna'] = $nama;
	$_SESSION['Nama'] = $full['Nama'];
	$_SESSION['email'] = $email['email'];
	$_SESSION['No_hp'] = $no['No_hp'];
	$_SESSION['photo'] = $foto['photo'];
	$_SESSION['status'] = "login";
	
  
  	setcookie("message","delete",time()-1);
	header("location:/integratif/eas/public");
}else{
	header("location:login.php?pesan=gagal");
}
?>