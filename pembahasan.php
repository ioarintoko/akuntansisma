<?php 
 include_once "koneksi.php";
 ?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title">Pembahasan</h4>
</div>
<div class="modal-body">
	<?php
		$id=isset($_GET['id'])?$_GET['id']*1:0;
		$sql	="SELECT * FROM tbl_soal WHERE id_soal='$id'";
		$hasil	=mysqli_query($koneksi, $sql);
		$no=1;
    ?>
		<table class="table table-striped table-bordered small">
        	<tr>
                <th>Pertanyaan</th>
                <th>Pembahasan</th>
            </tr>
            <?php
            	while($row=mysqli_fetch_assoc($hasil))
					{
			?>
            <tr>
                <td><?php echo $row['soal'];?></td>
                <td><?php echo $row['pembahasan'];?></td>
            </tr>
            <?php
					}
			?>
        </table>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
</div>