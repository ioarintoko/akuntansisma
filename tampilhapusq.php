<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akuntansi SMA</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,80">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
 
	<h3>Data Post</h3>
	<table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Pertanyaan</th>
			<th>opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM tbl_soal order by id_soal asc")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['soal']; ?></td>
			<td>
			<a href="aksihapusq.php?id=<?php echo $data['id_soal']; ?>" class="btn btn-primary">Hapus</a>				
			</td>
		</tr>
		<?php } ?>
	</table>