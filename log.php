<html>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
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
  width: 400px; 
  height: 230px; 
  padding: 180px 0px 90px 480px; 
} 
.gambar { 
  background-color: rgba(225, 255, 255, 0.4); 
  height: 330px; 
  border: 2px solid rgba(0, 0, 255 ,0.6); 
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
header('location:home_admin.php'); }
require_once("koneksi.php");
?>

<center>
<form action="proseslogin.php" method="post">
<h1>Masuk</h1>
<table>
<tbody>
<tr>
<td><b><font color = "light blue">Username</b></td>
<td>: <input name="username" type="text" class="login_regis" /></td>
</tr>
<tr>
<tr>
<tr>
<tr>

<td><b><font color = "light blue">Password</b></td>
<td>: <input name="password" type="password" class="login_regis" /></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="submit" value="Login" /> 
</tr>
</tbody>
</table>
</form>
</center>
</div>
</div>
</html>
