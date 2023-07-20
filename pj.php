<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM tbl_materi where id_kat='2'");
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

<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	 <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner"  align="center" >
    <div class="item active">
      <img src="images/GBJ1.jpg" alt="PERUSAHAAN DAGANG SWALAYAN"height=450 width=800>
    </div>

    <div class="item">
      <img src="images/GBJ2.jpg" alt="PERUSAHAAN DAGANG TRADISIONAL"height=450 width=800>
    </div>

    <div class="item">
      <img src="images/GBJ3.jpg" alt="PERUSAHAAN DAGANG MODERN"height=450 width=800>
    </div>
	<div class="item">
      <img src="images/GBJ1.jpg" alt="PERUSAHAAN DAGANG MODERN"height=450 width=800>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <?php
     while($data = mysqli_fetch_assoc($query)){
    ?>
    <div class="list-group">
          <a href="load.php?id=<?php echo $data['id_materi']; ?>" class="list-group-item"> <?= $data['judul'] ?> </a>
    <?php
    }
    ?>
	</div>
    
</body>
</html>