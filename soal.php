<!DOCTYPE html>
<html lang="en">
<head>
  <title>Akuntansi SMA - Welcome</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
  
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
<h1>Akuntansi SMA</h1>
<h3>Balance is my life</h3>

</div>
</body>
<?php
include "koneksi.php";
mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "akuntansi");
	echo "<h3>Quiz</h3>
	<b>Ujian Online Pilihan Ganda</b>";
echo "<div style='width:100%; border: 1px solid #EBEBEB;'>";
 echo '<table width="100%" border="0">';

		$hasil=mysqli_query($koneksi, "select * from tbl_soal WHERE aktif='Y'");
		$jumlah=mysqli_num_rows($hasil);
		$urut=0;
		while($row =mysqli_fetch_array($hasil))
		{
			$id=$row["id_soal"];
			$pertanyaan=$row["soal"];
			$pilihan_a=$row["a"];
			$pilihan_b=$row["b"];
			$pilihan_c=$row["c"];
			$pilihan_d=$row["d"]; 
			
			?>
			<form name="form1" method="post" action="jawab.php">
			<input type="hidden" name="id[]" value=<?php echo $id; ?>>
			<input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
			<tr>
			  	<td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
			  	<td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
			</tr>
			<?php
				if (!empty($row["gambar"])) {
					echo "<tr><td></td><td><img src='foto/$row[gambar]' width='200' hight='200'></td></tr>";
				}
			?>
			<tr>
			  	<td height="21"><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	     A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
	  	      <?php echo "$pilihan_a";?></font> </td>
			</tr>
			<tr>
			  	<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	     B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
	  	      <?php echo "$pilihan_b";?></font> </td>
			</tr>
			<tr>
			  	<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C"> 
	  	      <?php echo "$pilihan_c";?></font> </td>
			</tr>
			<tr>
				<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    D.   <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D"> 
	  	      <?php echo "$pilihan_d";?> <br><br></font> </td>
            </tr>
			
		<?php
		}
		?>
        	<tr>
				<td><br><br></td>
			  	<td><button type="submit" name="jawab" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')">Jawab</button></td>
            </tr>
			</table>
</form>
        </p>
</div>
