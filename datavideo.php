<style>
	.meki {
		margin: 70px auto;
		position: relative;
		padding: 25px auto;

	}
	.prof {
		margin-left: 30px;
	}

</style>
<div class="alert alert-info prof">
    <h3>VIDEO</h3>
</div>
<?php
include 'koneksi.php';

$sqlku = mysqli_query($koneksi, "SELECT * FROM video WHERE nim=$nimmah");

while ($row = mysqli_fetch_assoc($sqlku)) {
	echo 
    
	"<center>
    <br>
	<h2>Judul Video : $row[nama_video]</h2>
	<div class='meki'><video width='70%' height='70%' controls='controls'>
  <source src='user_video/$row[video]' type='video/mp4' />
</video></div>
<p>Deskripsi Video : $row[keterangan_video]</p>
*********************************************************************************************
</center>";
}

?>