<style type="text/css">
	.prof{
		margin-left: 30px;
	}
</style>
<div class="prof">
<?php 
include 'koneksi.php';
$tampil = mysqli_query($koneksi, "SELECT * FROM master, kepala, badan, tangan, kaki, ciri_umum WHERE master.nim=kepala.nim AND master.nim=badan.nim AND master.nim=tangan.nim AND master.nim=kaki.nim AND master.nim=ciri_umum.nim AND master.nim=$nimmah GROUP BY master.nim");
$pilih = mysqli_fetch_array($tampil);

?><div class="alert alert-info">
    <h3>Identifikasi Forensik</h3>
</div>
			<table class="table table-striped">
				<tr>
					<th width="20%">NIM</th>
					<td><?php echo $nimmah; ?></td>
				</tr>
				<tr>
					<th>NAMA LENGKAP</th>
					<td><?php echo $pilih['nama_lengkap']; ?></td>
				</tr>
				<tr>
					<th>Bentuk Kerangka Kepala</th>
					<td><?php echo $pilih['bentuk_kerangka']; ?></td>
				</tr>
				<tr>
					<th>Ciri Mata</th>
					<td><?php echo $pilih['ciri_mata']; ?> |<b> Jumlah Mata </b> <?php echo $pilih['jumlah_mata'] ?></td>
				</tr>
				<tr>
					<th>Ciri-ciri hidung</th>
					<td><?php echo $pilih['ciri_hidung']; ?></td>
				</tr>
				<tr>
					<th>Cacat Bawaan Bagian Kepala</th>
					<td><?php echo $pilih['ciri_cacat']; ?></td>
				</tr>
				<tr>
					<th>Bentuk Telinga</th>
					<td><?php echo $pilih['ciri_telinga']; ?> | <b>Jumlah Telinga </b> <?php echo $pilih['jumlah_telinga'] ?></td>
				</tr>
				<tr>
					<th>Ciri-ciri Rambut</th>
					<td><?php echo $pilih['ciri_rambut']; ?></td>
				</tr>
				<tr>
					<th>Letak Tahi Lalat Di Kepala</th>
					<td><?php echo $pilih['ciri_tahilalat']; ?> | <b>Jumlah Tahi Lalat</b> <?php echo $pilih['jumlah_tahilalat'] ?></td>
				</tr>
				<tr>
					<th>Ciri-ciri Jenggot</th>
					<td><?php echo $pilih['ciri_jenggot']; ?></td>
				</tr>
				<tr>
					<th>Ciri-ciri Kumis</th>
					<td><?php echo $pilih['ciri_kumis']; ?></td>
				</tr>
				<tr>
					<th>Rumus Gigi</th>
					<td><?php echo $pilih['rumus_gigi']; ?></td>
				</tr>
			</table>
<div class="alert alert-info"><h3>Identifikasi Forensik Badan</h3></div>
			<table class="table table-striped">
				<tr>
					<th width="20%">Warna Kulit Badan</th>
					<td><?php echo $pilih['warna_kulit_badan']; ?></td>
				</tr>
				<tr>
					<th>Ciri Dada</th>
					<td><?php echo $pilih['ciri_dada']; ?></td>
				</tr>
				<tr>
					<th>Ciri Perut</th>
					<td><?php echo $pilih['ciri_perut']; ?></td>
				</tr>
				<tr>
					<th>Panjang Badan</th>
				<td><?php echo $pilih['panjang_badan']; ?></td>
				</tr>
				<tr>
					<th>Ciri cacat</th>
					<td><?php echo $pilih['ciri_cacat']; ?></td>
				</tr>
				<tr>
					<th>Ciri Punggung</th>
					<td><?php echo $pilih['ciri_punggung']; ?></td>
				</tr>
				<tr>
					<th>Bentuk Tulang Belakang</th>
					<td><?php echo $pilih['bentuk_tulangbelakang']; ?></td>
				</tr>
				<tr>
					<th>Lebar bahu</th>
					<td><?php echo $pilih['lebar_bahu']; ?> | <b>Lebar Pinggang <?php echo $pilih['lebar_pinggang'] ?></td>
				</tr>
				<tr>
					<th>Letak Tahi Lalat Di Kepala</th>
					<td><?php echo $pilih['ciri_tahilalat']; ?> | <b>Jumlah Tahi Lalat</b> <?php echo $pilih['jumlah_tahilalat'] ?></td>
				</tr>
				<tr>
					<th>Bekas Luka</th>
					<td><?php echo $pilih['bekas_luka']; ?></td>
				</tr>
			</table>
<div class="alert alert-info"><h3>Identifikasi Forensik Tangan</h3></div>
			<table class="table table-striped">
				<tr>
					<th width="20%">Jumlah Tangan</th>
					<td><?php echo $pilih['jumlah_tangan']; ?></td>
				</tr>
				<tr>
					<th>Lebar Lengan</th>
					<td><?php echo $pilih['lebar_lengan']; ?></td>
				</tr>
				<tr>
					<th>Panjang Lengan</th>
					<td><?php echo $pilih['panjang_lengan']; ?></td>
				</tr>
				<tr>
					<th>Ciri Jari</th>
				<td><?php echo $pilih['ciri_jari']; ?></td>
				</tr>
				<tr>
					<th>Jumlah Jari</th>
					<td><?php echo $pilih['jumlah_jari']; ?></td>
				</tr>
				<tr>
					<th>Tanda Khusus</th>
					<td><?php echo $pilih['tanda_khusus']; ?></td>
				</tr>
				<tr>
					<th>Ciri Cacat</th>
					<td><?php echo $pilih['ciri_cacat']; ?></td>
				</tr>
				<tr>
					<th>Rumus Sidik Jari</th>
					<td><?php echo $pilih['rumus_sidik_jari']; ?></td>
				</tr>
			</table>			
			<div class="alert alert-info"><h3>Identifikasi Forensik Kaki</h3></div>
			<table class="table table-striped">
				<tr>
					<th width="20%">Jumlah Kaki</th>
					<td><?php echo $pilih['jumlah_kaki']; ?></td>
				</tr>
				<tr>
					<th>Panjang Kaki</th>
					<td><?php echo $pilih['panjang_kaki']; ?></td>
				</tr>
				<tr>
					<th>Bentuk Kaki</th>
					<td><?php echo $pilih['bentuk_kaki']; ?></td>
				</tr>
				<tr>
					<th>Ciri Telapak Kaki</th>
				<td><?php echo $pilih['ciri_telapak_kaki']; ?></td>
				</tr>
				<tr>
					<th>Ciri Jari Kaki</th>
					<td><?php echo $pilih['ciri_jari_kaki']; ?></td>
				</tr>
				<tr>
					<th>Jumlah Jari Kaki</th>
					<td><?php echo $pilih['jumlah_jari_kaki']; ?></td>
				</tr>
				<tr>
					<th>Ciri Tahi Lalat</th>
					<td><?php echo $pilih['ciri_tahilalat']; ?></td>
				</tr>
				<tr>
					<th>Jumlah Tahi Lalat</th>
					<td><?php echo $pilih['jumlah_tahilalat']; ?></td>
				</tr>
				<tr>
					<th>Ciri Cacat</th>
					<td><?php echo $pilih['ciri_cacat']; ?></td>
				</tr>
			</table>
<div class="alert alert-info"><h3>Identifikasi Ciri Umum</h3></div>
			<table class="table table-striped">
				<tr>
					<th width="20%">Tinggi Badan</th>
					<td><?php echo $pilih['tinggi_badan']; ?></td>
				</tr>
				<tr>
					<th>Berat Badan</th>
					<td><?php echo $pilih['berat_badan']; ?></td>
				</tr>
				<tr>
					<th>Usia</th>
					<td><?php echo $pilih['usia']; ?></td>
				</tr>
				<tr>
					<th>Warna Kulit</th>
				<td><?php echo $pilih['warna_kulit']; ?></td>
				</tr>
				<tr>
					<th>Ras</th>
					<td><?php echo $pilih['ras']; ?></td>
				</tr>
				<tr>
					<th>Agama</th>
					<td><?php echo $pilih['agama']; ?></td>
				</tr>
			</table>
			
			</div>						
			