<?php session_start();
if(!isset($_SESSION['username'])) {
header('location:log.php'); }
else { $username = $_SESSION['username']; }
require_once("koneksi.php");
$query = mysql_query("SELECT * FROM user WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Akuntansi SMA - Welcome</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<style>
.bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
}

.img {
    border: 1px solid #ddd; /* Gray border */
    border-radius: 4px;  /* Rounded border */
    padding: 5px; /* Some padding */
    width: 150px; /* Set a small width */
}

</style>
<body>
<div class="container-fluid bg-1 text-center">
<span align="right"><a href="logout.php" class="btn btn-primary">Logout</a></span>
<h1>Akuntansi SMA</h1>
<h3>Balance is my life</h3>

</div>

<center>
<h1>Selamat Datang, <?=$_SESSION['username'];?></h1>
<H4>SILAHKAN PILIH MENU YANG ANDA INGINKAN</H4>
<BR><BR>
<div class="panel panel-primary">
  <div class="panel-heading"><h3>Posting dan Komentar</div>
  <div class="panel-body">
<div class="col-md-3 col-sm-4 col-xs-12  style="position: middle; left: 0px; top: 20px;">
                <div class="thumbnail">
                    <a href="tambah.php">
                        <img src="images/tambah.JPG" alt="">
                    </a>
                    <div class="caption">
                        <h5 class="text-uppercase no-margin-top page-header page-header-gold no-padding">
                            <a href="tambah.php" class="ng-binding">Tambah Post</a>
                        </h5>
                    </div>
                </div>
            </div>
<div class="col-md-3 col-sm-4 col-xs-12  style="position: middle; left: 0px; top: 20px;">
                <div class="thumbnail">
                    <a href="tampiledit.php">
                        <img src="images/edit.JPG" alt="">
                    </a>
                    <div class="caption">
                        <h5 class="text-uppercase no-margin-top page-header page-header-gold no-padding">
                            <a href="tampiledit.php" class="ng-binding">Edit Post</a>
                        </h5>
                    </div>
                </div>
            </div>
  <div class="col-md-3 col-sm-4 col-xs-12 style="position: middle; left: 0px; top: 20px;" >
                <div class="thumbnail">
                    <a href="tampil.php">
                        <img src="images/hapus.JPG" alt="">
                    </a>
                    <div class="caption">
                        <h5 class="text-uppercase no-margin-top page-header page-header-gold no-padding">
                            <a href="tampil.php" class="ng-binding">Hapus Post</a>
                        </h5>
                    </div>
                </div>
            </div>
  <div class="col-md-3 col-sm-4 col-xs-12 style="position: middle; left: 0px; top: 20px;">
                <div class="thumbnail">
                    <a href="index.php">
                        <img src="images/lihat.JPG" alt="">
                    </a>
                    <div class="caption">
                        <h5 class="text-uppercase no-margin-top page-header page-header-gold no-padding">
                            <a href="index.php" class="ng-binding">Lihat Post</a>
                        </h5>
                    </div>
                </div>
			</div>	
<div class="col-md-3 col-sm-3 col-xs-12 style="position: middle; left: 5px; top: 20px;">
                <div class="thumbnail">
                    <a href="pesan.php">
                        <img src="images/edit.JPG" alt="">
                    </a>
                    <div class="caption">
                        <h5 class="text-uppercase no-margin-top page-header page-header-gold no-padding">
                            <a href="home_admin.php?link=pesan.php" class="ng-binding">Lihat Pesan</a>
                        </h5>
                    </div>
                </div>	
			</div>
		  </div>	
			</div>
<div class="panel panel-primary">
  <div class="panel-heading"><h3>Soal Quiz</div>
  <div class="panel-body">		
<div class="col-md-3 col-sm-4 col-xs-12  style="position: middle; left: 0px; top: 20px;">
                <div class="thumbnail">
                    <a href="tambahq.php">
                        <img src="images/tambah.JPG" alt="">
                    </a>
                    <div class="caption">
                        <h5 class="text-uppercase no-margin-top page-header page-header-gold no-padding">
                            <a href="tambahq.php" class="ng-binding">Tambah Pertanyaan</a>
                        </h5>
                    </div>
                </div>
            </div>
  <div class="col-md-3 col-sm-4 col-xs-12 style="position: middle; left: 0px; top: 20px;" >
                <div class="thumbnail">
                    <a href="tampilhapusq.php">
                        <img src="images/hapus.JPG" alt="">
                    </a>
                    <div class="caption">
                        <h5 class="text-uppercase no-margin-top page-header page-header-gold no-padding">
                            <a href="tampilhapusq.php" class="ng-binding">Hapus Pertanyaan</a>
                        </h5>
                    </div>
                </div>
            </div>  
  <div class="col-md-3 col-sm-4 col-xs-12 style="position: middle; left: 0px; top: 20px;">
                <div class="thumbnail">
                    <a href="soal.php">
                        <img src="images/lihat.JPG" alt="">
                    </a>
                    <div class="caption">
                        <h5 class="text-uppercase no-margin-top page-header page-header-gold no-padding">
                            <a href="soal.php" class="ng-binding">Lihat Soal</a>
                        </h5>
                    </div>
                </div>
			</div>	
  </div>
</center>
</body>
</html>
