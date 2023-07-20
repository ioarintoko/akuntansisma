<?php
include "koneksi.php";
$judul_post  = $_POST['jdl_post'];
$isi_post	= $_POST['isi_post'];
$id_kat = $_POST['idKat'];
$query = "SELECT max(id_materi) as maxKode FROM tbl_materi";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$kodemateri = $data['maxKode'];
$kodemateri++;
#tangkap gambar
$namafolder="images/"; //folder tempat menyimpan file
if (!empty($_FILES["gbr_post"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['gbr_post']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png"|| $jenis_gambar=="video/mp4")
    {           
        $gambar = $namafolder . basename($_FILES['gbr_post']['name']);       
        if (move_uploaded_file($_FILES['gbr_post']['tmp_name'], $gambar)) {
           mysqli_query($koneksi, "insert into tbl_materi values ('$kodemateri', '$id_kat','$judul_post', '$isi_post', '$gambar')"); 
		   ?>
				<script language="javascript">
                    alert('Berhasil menambahkan');
                    document.location="home_admin.php?link=lihatpost.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="home_admin.php?link=tambah.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="home_admin.php?tambah.php";
            </script>
   		<?php
   }
} else {
    echo "Anda belum memilih gambar";
}
?>