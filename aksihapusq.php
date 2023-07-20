<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysql_query("DELETE FROM tbl_soal WHERE id_soal='$id'")or die(mysql_error());
 
?>
<script language="javascript">
                    alert('Berhasil dihapus');
                    document.location="tampilhapusq.php";
                </script>