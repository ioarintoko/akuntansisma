<?php
include "koneksi.php";
$ambil_data = mysqli_query($koneksi, "select * from tbl_materi where id_materi='$_GET[id]'");
$hasil_data = mysqli_fetch_array($ambil_data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Akuntansi SMA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.imgR {
	width: 600px;
	margin: auto;
}
.imgR img{
	width:600px;
}
@media (max-width: 1024px) {
	.imgR img {
		width:550px;
	}
}
@media (max-width: 800px) {
	.imgR img {
		width:500px;
	}
}
@media (max-width: 768px) {
	.imgR img {
		width:450px;
	}
}
@media (max-width: 450px) {
	.imgR img {
		width:350px;
	}
}
</style>

<body>

<div class="panel panel-primary">
  <div class="panel-heading"><h3><?=$hasil_data['judul'];?></h3></div>
    <br>  
      <div class="imgR"><img src="<?=$hasil_data['gambar'];?>" /></div>
            <div class="panel-body">
	  <p style="text-align:justify;"><?=$hasil_data['isi_materi'];?></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>