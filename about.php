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
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 600px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
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
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 600px;
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  max-height: 600px;
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
}
</style>

<body>

<H1 align="center">ABOUT</H1>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Website')" id="defaultOpen">Website ini</button>
  <button class="tablinks" onclick="openCity(event, 'Profil')">Profil</button>
  <button class="tablinks" onclick="openCity(event, 'Masukkan')">Masukkan</button>
</div>

<div id="Website" class="tabcontent">
  <h3>Akuntansi SMA</h3>
  <p>Website ini dibuat untuk membantu para siswa SMA untuk memahami materi akuntansi yang diajarkan di sekolah.</p>
</div>

<div id="Profil" class="tabcontent">
  <h3>Profil</h3>
<div class="card1">
  <img src="images/bram.jpg" alt="Bramantio" style="width:100%" height="375">
  <div class="container1">
    <h3>Bramantio Galih Arintoko</h3>
    <p>Gunadarma University</p>
    <div style="margin: 24px 0;">  
	  <a href="https://twitter.com/Galiharintoko"><img alt="Twitter" border="0" src="http://1.bp.blogspot.com/-Chro7q6uj2E/Uvbt-ZIuvuI/AAAAAAAAAQQ/lKgie6d-MNo/s20/twitter.png" title="Follow my Twitter" /></a>&nbsp;
	  <a href="https://www.instagram.com/galiharintoko7/?hl=id"><img alt="Instagram" border="0" src="http://2.bp.blogspot.com/-sGItvKHpEBI/Uvbt9uc-twI/AAAAAAAAAP8/mSrkggy9aY8/s20/instagram.png" title="Find me on Instagram" /></a>
	  <a href="https://www.facebook.com/jackmaniandevil"><img alt="Facebook" border="0" src="http://1.bp.blogspot.com/-Fpo8Edcz9r8/Uvbt82X_xTI/AAAAAAAAAPs/ulsuFKNvuUI/s20/facebook.png" title="Find me on Facebook" /></a>&nbsp;
   </div>
  </div>
</div>

</div>

<div id="Masukkan" class="tabcontent">
  <?php include "comment.html"; ?>
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