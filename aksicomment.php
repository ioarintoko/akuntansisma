<?php
include "koneksi.php";
include "about.php";
include "comment.html";
$nama=$_POST["nama"];
$email=$_POST["email"];
$website=$_POST["website"];
$komentar=$_POST["komentar"];
// if(empty($nama))
// $nama='anonymous';
// if(empty($komentar)){
// die("komentar harus diisi");}
$tanggal = date("Y-m-d");
echo $tanggal;
//connect database
// $nama = "Bram";
// $email = "a";
// $website = "a";
// $komentar = "a";
$sql = "INSERT INTO komentar (nama, email, website, komentar, tanggal) VALUES ('$nama','$email','$website', '$komentar', '$tanggal')";
echo $sql;
if(mysqli_query($koneksi, $sql)){
    echo "bisa";
}else{
    echo mysqli_error();
}
// mysqli_query($koneksi, $sql);
// if (!mysqli_query($koneksi, $sql))
//  {
//  die('Error: ' . mysqli_error());
//  }
// if($sql){
// 				echo "<meta http-equiv='refresh' content='0; url=about.php'>";
//                 echo '<div class="alert alert-success">Pesan anda berhasil di simpan!</div>';
//             }else{
//             	echo "<meta http-equiv='refresh' content='0; url=about.php'>";
//                 echo '<div class="alert alert-warning">Gagal menyimpan pesan!</div>';
                
//             }
// mysqli_close($koneksi);
?>
<script language="javascript">
                    alert('Berhasil ditambah');
                    document.location="about.php";
                </script>