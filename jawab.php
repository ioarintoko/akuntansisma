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
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<h1>Akuntansi SMA</h1>
<h3>Balance is my life</h3>

</div>
</body>
<?php
include "koneksi.php";
mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "akuntansi");

       if(isset($_POST['jawab'])){
			$pilihan=$_POST["pilihan"];
			$id_soal=$_POST["id"];
			$jumlah=$_POST['jumlah'];
			
			$score=0;
			$benar=0;
			$salah=0;
			$kosong=0;
			
			for ($i=0;$i<$jumlah;$i++){
				//id nomor soal
				$nomor=$id_soal[$i];
				
				//jika user tidak memilih jawaban
				if (empty($pilihan[$nomor])){
					$kosong++;
				}else{
					//jawaban dari user
					$jawaban=$pilihan[$nomor];
					
					//cocokan jawaban user dengan jawaban di database
					$query=mysqli_query($koneksi, "select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
					
					$cek=mysqli_num_rows($query);
					
					if($cek){
						//jika jawaban cocok (benar)
						$benar++;
					}else{
						//jika salah
						$salah++;
					}
					
				} 
				/*RUMUS
				Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan 
				hasil= 100 / jumlah soal * jawaban yang benar
				*/
				
				$result=mysqli_query($koneksi, "select * from tbl_soal WHERE aktif='Y'");
				$jumlah_soal=mysqli_num_rows($result);
				$score = 100/$jumlah_soal*$benar;
				$hasil = number_format($score,1);
			}
		}

		//Lakukan Penyimpanan Kedalam Database
	  echo "
		<div> <table> <tr><td>Jumlah Jawaban Benar</td><td> : $benar </td></tr>
		 <tr><td>Jumlah Jawaban Salah</td><td> : $salah</td></tr>
		 <tr><td>Jumlah Jawaban Kosong</td><td>: $kosong</td></tr>
		 <tr><td>Jumlah Nilai Anda</td><td>: $score</td></tr>
		</table></div>";
		?>
		<?php
		include "koneksi.php";
mysqli_connect("localhost","root","");
mysqli_select_db($koneksi, "akuntansi");
	echo "<br><br>";
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
			$kunci=$row["knc_jawaban"];
			
			?>
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
	  	     A. <?php echo "$pilihan_a";?></font> </td>
			</tr>
			<tr>
			  	<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	     B. <?php echo "$pilihan_b";?></font> </td>
			</tr>
			<tr>
			  	<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    C. <?php echo "$pilihan_c";?></font> </td>
			</tr>
			<tr>
				<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    D. <?php echo "$pilihan_d";?> <br><br></font> </td>
            </tr>
			<tr>
				<td><font color="#000000">&nbsp;</font></td>
		  	  <td><font color="#000000">
	  	    Jawaban yang benar : <?php echo "$kunci";?> <br><br></font> </td>
            </tr>
				<tr>
				<td></td>
			  	<td><a href="pembahasan.php?id=<?php echo $row['id_soal'];?>" class='btn btn-default btn-small' id='soalId' data-toggle='modal' data-target="#myModal">Pembahasan</a></td>
			</tr>
		<?php
		}
		?>
		<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Pembahasan</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script language="javascript">
		$('body').on('hidden.bs.modal', '.modal', function () {
		    $(this).removeData('bs.modal');
		});
	</script>
</body>
</html>
</body>
</html>