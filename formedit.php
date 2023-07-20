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
<script src="ckeditor/ckeditor.js"></script>
	<h3>Edit data</h3>
<?php
include 'koneksi.php';
$tampil = mysqli_query($koneksi, "SELECT * FROM tbl_materi WHERE id_materi='$_GET[id]'") or die(mysqli_error());
$data	= mysqli_fetch_array($tampil);
?>

<form name="edit" method="post" action="perbarui.php" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $data['id_materi'];?>">
<div class="form-group">
<label class="label-control">aaJudul Materi</label>
<div class="controls"> <input type="text" class="form-control" name="judul" size="50" value="<?php echo $data['judul']; ?>"></div>
</div>
<div class="control-group">
<label class="control-label" for="inputKategori">Kategori</label>
<div class="controls">
<select name="idkat" class="form-control">
<option value="1"> Perusahaan Dagang </option>
<option value="2"> Perusahaan Jasa </option>
</select>
</div>
</div>
<div class="form-group">
<label class="label-control">aaGambar</label>
<div class="controls"><img src="<?php echo $data['gambar']; ?>" width="300" class="thumbnail"> <input type="file" class="form-control" name="gambar"></div>
</div>
<div class="form-group">
<label class="label-control">Isi</label>
<div class="controls"><textarea name="isi" cols="80" rows="15" class="form-control"><?php echo $data['isi_materi']; ?></textarea></div>
</div>
<div class="form-group">
<label class="label-control"></label>
<div class="controls"> <input type="submit" name="edit" value="Ubah" class="btn btn-primary"></div>
</div>
</form>
</div><!--/span-->
</div><!--/row-->
<hr>
 </div>
</body>
<script type="text/javascript">
if ( typeof CKEDITOR == 'undefined' )

{

document.write(

'CKEditor not found');

}

else

{

var editor = CKEDITOR.replace( 'isi' );


CKFinder.setupCKEditor( editor, '' ) ;





}

</script>
