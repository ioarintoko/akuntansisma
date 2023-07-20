<?php
include 'koneksi.php';
$nama_gambar	= $_FILES['gambar']['name'];
$lokasi_gambar	= $_FILES['gambar']['tmp_name'];
$tipe_gambar  = $_FILES['gambar']['type'];
$isi	= addslashes($_POST['isi']);
if($lokasi_gambar==""){
mysqli_query($koneksi, "UPDATE tbl_materi SET id_kat='$_POST[idkat]', judul='$_POST[judul]', isi_materi='$isi' WHERE id_materi='$_POST[id]'") or die(mysqli_error());
}else{
$data=mysqli_fetch_array(mysqli_query($koneksi, "select * from tbl_materi where id_resep='$_POST[id]'"));
if($data['gambar'] != "") unlink("$data[gambar]");
move_uploaded_file($lokasi_gambar,"images/$nama_gambar");
mysqli_query($koneksi, "UPDATE tbl_materi SET id_kat='$_POST[idkat]', judul='$_POST[judul]', isi_materi='$isi' gambar='images/$nama_gambar' WHERE id_materi='$_POST[id]'") or die(mysqli_error());}
echo"Data telah diedit";
echo"<meta http-equiv='refresh' content='1; url=home_admin.php?link=tampiledit.php'>";
?>
