<html>
<head>
</head>
<style>
body, html {
    height: 100%;
}

.bg { 
    /* The image used */
    background-image: url("images/akuntansi1.jpg");
	

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	opacity:5;
}
.header_isi { 
  width: 500px; 
  height: 430px; 
  padding: 180px 0px 90px 480px; 
} 
.gambar { 
  background-color: rgba(100, 214, 3 ,0.6); 
  height: 330px; 
  border: 2px solid rgba(100, 214, 3 ,0.6); 
} 
.login_regis { 
  height: 40px; 
  width: 260px; 
  text-align: center; 
  color: black;
  font-size: 17px; 
  border-radius: 8px; 
  background-color: rgba(225, 255, 255, 0.4); 
  border: 3px solid #0288D1; 
  margin-left: 42px; 
  margin-top: 10px;  
} 
</style>
<div class="bg">
<div class="header_isi"> 
<div class="gambar"> 

<?php session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
?>
<center>
 
<form action="prosesdaftar.php" method="post">
<table>
<tbody>
<tr>
<td colspan="2" align="center">
<h1>Daftar Baru</h1>
</td>
</tr>
<td><b>Nama</b></td>
<td>: <input name="nama" type="text" class="login_regis"/></td>
</tr>

<tr>
<td><b>Username</b></td>
<td>: <input name="username" type="text" class="login_regis" /></td>
</tr>
<tr>
<td><b>Password</b></td>
<td>: <input name="password" type="password" class="login_regis" /></td>
</tr>
<tr>
<td><b>Asal Sekolah</b></td>
<td>: <input name="asal" type="text" class="login_regis" /></td>
</tr>
<tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Daftar" />
</tr>
<tr>
<td colspan="2" align="center">Sudah Punya akun ? <a href="log.php"><b>Login</b></a></td>
</tr>
</tbody>
</table>
</form>
</center>
</div>
</div>
