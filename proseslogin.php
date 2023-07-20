<?php session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser);
if($jumlah == 0) {
echo 'Username Belum Terdaftar!';
echo '<a href="log.php"> Back</a>';
} else {
if($pass != $hasil['password']) {
echo 'Password Salah!';
echo '<a href="log.php"> Back</a>';
} else {
$_SESSION['username'] = $hasil['username'];
header('location:home_admin.php');
}
}
?>
<html><head><title>Akuntansi SMA</title>
<meta http-equiv="refresh" content="3;url=log.php"></head>
<body></body>
</html>