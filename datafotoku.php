<style type="text/css">
	.page-header{
		margin-left: 30px;
	}
	.prof {
		margin-left: 30px;
	}

</style>
<div class="alert alert-info prof">
    <h3>FOTO</h3>
</div>
<div class="page-header">
<div class="row">

<?php
include 'koneksi.php';

$sqlku = mysqli_query($koneksi, "SELECT * FROM foto WHERE nim=$nimmah");

while ($row = mysqli_fetch_assoc($sqlku)) {
	echo
"<div class='col-xs-3'>
				<p class='page-header'>NAMA FOTO : $row[nama_foto] <br> </p>
				<img src='user_images/$row[picture]' class='img-rounded' width='250px' height='250px' /> <br>
				<p>Keterangan Foto : $row[keterangan_foto]</p>
				</div>";
				}
				?></div></div>
				