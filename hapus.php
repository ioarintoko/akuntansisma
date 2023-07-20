<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tbl_materi WHERE id_materi='$id'")or die(mysqli_error());
 
?>
<script language="javascript">
                    alert('Berhasil dihapus');
                    document.location="home_admin.php?link=tampil.php";
                </script>