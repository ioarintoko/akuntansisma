<?php session_start();
if(!isset($_SESSION['username'])) {
header('location:log.php'); }
else { $username = $_SESSION['username']; }
require_once("koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
$hasil = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN - Akuntansi SMA </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>  
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #C0C0C0;
    width: 30%;
    height: 620px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: white;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #0000FF;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 620px;
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  max-height: 700px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.container1 {
  padding: 0 1px;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size: 18px;
}

button1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
}

.textinput {
  float:left;
  width: 100%;
  min-height: 35px;
  outline: none;
  resize: none;
  border: 1px solid #f0f0f0;
}.bg-1 { 
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
<div class="container-fluid bg-1 text-left">
<span align="right"><a href="logout.php" class="btn btn-primary">Logout</a></span>
<h1>Akuntansi SMA</h1>

</div>

<center>
<h1>Selamat Datang, <?=$_SESSION['username'];?></h1>
<H4>SILAHKAN PILIH MENU YANG ANDA INGINKAN</H4>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Posting')" id="defaultOpen">Posting dan Komentar</button>
  <button class="tablinks" onclick="openCity(event, 'Quiz')">Soal Quiz</button>
</div>

<div id="Posting" class="tabcontent">
  <h3>Posting dan Komentar</h3>
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

<div id="Quiz" class="tabcontent">
  <h3>Soal Quiz</h3>
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
                            <a href="soal.php" class="ng-binding">Lihat Pertanyaan</a>
                        </h5>
                    </div>
                </div>
			</div>	

</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 