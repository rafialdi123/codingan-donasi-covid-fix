<html>
<head>
    <title>tu.skul-registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

 <div class="kotak_add" style="border:0">

    <a href="index.php"><img class="logo" src="logo/tu.png" ></a>

    <form action="add.php" method="post" name="form1">

 			<center><label><b>Nama Lengkap</b></label></center>
            <input type="text" name="Nama" class="form_login" placeholder=". . ."  required="required">
            
            <center><label><b>Nama Pengguna</b></label></center>
            <input type="text" name="Nama_Pengguna" class="form_login" placeholder=". . ."  required="required">
            
            <center><label><b>No.HP</b></label></center>
            <input type="text" name="No_hp" class="form_login" placeholder=". . ."  required="required">

            <center><label><b>Email</b></label></center>
            <input type="email" name="Email" class="form_login" placeholder=". . ."  required="required">
            
            <center><label><b>Kata Sandi</b></label></center>
            <input type="password" name="password" class="form_login" placeholder=". . ."  required="required">

            <!--<center><label class="custom-file-upload"><input type="file" name="photo" class="inputfile" /><b>Unggah Foto Profil</b> </label></center>-->
            
            

    <!--<table width="100%" >   
            <tr> 
                <td>Nama</td>
                <td ><input type="text" name="Nama" required></td>
            </tr>
            <tr> 
                <td>Nama Pengguna</td>
                <td><input type="text" name="Nama_Pengguna" required></td>
            </tr>
            <tr> 
                <td>No.HP</td>
                <td><input type="text" name="No_hp" required></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="Email" required></td>
            </tr>
            <tr> 
                <td>Kata Sandi</td>
                <td><input type="password" name="password" required></td>
            </tr>
    </table>*/-->
        
        <tr> 
                <td></td>
                <td ><input class="tombol_login" type="submit" name="Submit" value="Daftar"></td>
        </tr>
        <center>
				<a class="link">Sudah punya akun ? masuk <a class="link" href="login.php"><b>disini</b></a></a>
		</center>
    </form>
 </div>

    <?php


    if(isset($_POST['Submit'])) {
        $nama = $_POST['Nama'];
        $username = $_POST['Nama_Pengguna'];
        $nomor = $_POST['No_hp'];
        $email = $_POST['Email'];
        $password = $_POST['password'];
        $foto = 'default.png';

        $pw= hash('sha256',$password);

       
        include_once("koneksi.php");

        
        $result = mysqli_query($koneksi, "INSERT INTO akun(Nama,Nama_Pengguna,No_hp,email,password,photo) VALUES('$nama','$username','$nomor','$email','$pw','$foto')");

        echo "User added successfully. <a href='index.php'>View Users</a>";
        header("location:login.php");}
         
    ?>

</body>
</html>