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

<?php
function getcomment($id){
include "koneksi.php";
$commentquery = mysqli_query($koneksi, "SELECT * FROM komentar
ORDER BY id DESC") or die(mysqli_error());
$commentNum = mysqli_num_rows($commentquery);
echo "<h4>" . "Data komentar!.." . "</h4>";
echo "<b>" . $commentNum . " komentar(s)" .
"</b>" . "<br />" . "<br />";
echo "<hr>";
while($row = mysqli_fetch_array($commentquery))
 {
 echo '
				<table class="table table-condensed table-striped">
					<tr>
						<th width="150">NAMA LENGKAP</th>
						<th width="10">:</th>
						<td>'.$row['nama'].'</td>
					</tr>
					<tr>
						<th>EMAIL</th>
						<th>:</th>
						<td>'.$row['email'].'</td>
					</tr>
					<tr>
						<th>WEBSITE</th>
						<th>:</th>
						<td>'.$row['website'].'</td>
					</tr>
					<tr>
						<th>ISI KOMENTAR</th>
						<th>:</th>
						<td>'.$row['komentar'].'</td>
					</tr>
				</table>
				';
			
			
		}
 }

?>