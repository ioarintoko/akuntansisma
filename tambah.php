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
<h2>INPUT post</h2>
<form class="form-horizontal" method="post" action="simpan.php" name="frmpost" enctype="multipart/form-data">
  <div class="control-group">
  <label class="control-label" for="inputJudul">Judul</label>
    <div class="controls">
      <input size="80" type="text" placeholder="Judul post" name="jdl_post" required class="form-control" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputKategori">Kategori</label>
    <div class="controls">
    <select name="idKat" class="form-control">
      <option value="1"> Perusahaan Dagang </option>
      <option value="2"> Perusahaan Jasa </option>
    </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputIsipost">Isi post</label>
    <div class="controls">
      <textarea rows="10" cols="80" class="span12" name="isi_post" required></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputGambar">Gambar </label>
    <div class="controls">
      <input type="file" id="inputGambar" name="gbr_post" required>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Post</button>
      <button type="reset" class="btn btn-inverse">Cancel</button>
    </div>
  </div>
</form>
<script type="text/javascript">


if ( typeof CKEDITOR == 'undefined' )
{
  document.write(
    'CKEditor not found');
}
else
{
  var editor = CKEDITOR.replace( 'isi_post' ); 

  
  CKFinder.setupCKEditor( editor, '' ) ;

  
}
</script>
