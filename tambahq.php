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
  
</head>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
<br><br>
        <form method="post" action="simpanq.php">
             <div class="form-group">
                <label for="pertanyaan">Pertanyaan</label>
                <textarea name="pertanyaan" class="ckeditor">
                </textarea>
            </div>
             <div class="control-group">
  <label class="control-label" for="inputa">Pilihan a</label>
    <div class="controls">
      <input size="80" type="text" placeholder="a" name="pilihan_a" required class="form-control" >
    </div>
  </div>
             <div class="control-group">
  <label class="control-label" for="inputb">Pilihan b</label>
    <div class="controls">
      <input size="80" type="text" placeholder="b" name="pilihan_b" required class="form-control" >
    </div>
  </div>
             <div class="control-group">
  <label class="control-label" for="inputc">Pilihan c</label>
    <div class="controls">
      <input size="80" type="text" placeholder="c" name="pilihan_c" required class="form-control" >
    </div>
  </div>
             <div class="control-group">
  <label class="control-label" for="inputd">Pilihan d</label>
    <div class="controls">
      <input size="80" type="text" placeholder="d" name="pilihan_d" required class="form-control" >
    </div>
  </div>
<div class="control-group">
    <label class="control-label" for="inputkunci">Jawaban</label>
    <div class="controls">
    <select name="jawaban" class="form-control">
      <option value="a">A</option>
      <option value="b">B</option>
	  <option value="c">C</option>
	  <option value="d">D</option>
    </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputpublish">Publish</label>
    <div class="controls">
    <select name="publish" class="form-control">
      <option value="y">Yes</option>
      <option value="n">No</option>
    </select>
    </div>
  </div>
   <div class="form-group">
                <label for="pembahasan">Pembahasan</label>
                <textarea name="pembahasan" class="ckeditor">
                </textarea>
            </div>
 <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-primary">Post</button>
      <button type="reset" class="btn btn-inverse">Cancel</button>
    </div>
  </div>
  </form>
    </body>
</html>
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