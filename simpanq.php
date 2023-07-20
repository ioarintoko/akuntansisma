<?php
include "koneksi.php";
$pertanyaan  = $_POST['pertanyaan'];
$a	= $_POST['pilihan_a'];
$a	= $_POST['pilihan_a'];
$b	= $_POST['pilihan_b'];
$c	= $_POST['pilihan_c'];
$d	= $_POST['pilihan_d'];
$jawab = $_POST['jawaban'];
$tanggal=date('d-m-Y');
$publish=$_POST['publish'];
$pembahasan=$_POST['pembahasan'];
$query1 = "SELECT max(id_soal) as maxKode FROM tbl_soal";
$hasil = mysql_query($query1);
$data  = mysql_fetch_array($hasil);
$kodemateri = $data['maxKode'];
$kodemateri++;

           mysql_query("insert into tbl_soal values ('$kodemateri', '$pertanyaan','$a', '$b', '$c','$d', '$jawab', '$tanggal', '$publish', '$pembahasan')",$koneksi); 
?>
<script language="javascript">
                    alert('Berhasil ditambah');
                    document.location="home_admin.php";
                </script>