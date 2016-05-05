<style type="text/css">
	.prof{
		margin-left: 30px;
	}
</style>
<div class="prof">
<?php 
include 'koneksi.php';
$tampil = mysqli_query($koneksi, "SELECT * FROM master, polahidup, kesukaan, kepribadian WHERE master.nim=polahidup.nim AND master.nim=kesukaan.nim AND master.nim=kepribadian.nim AND master.nim=$nimmah GROUP BY master.nim");
$pilih = mysqli_fetch_array($tampil);

?><div class="alert alert-info">
    <h3>Pola Hidup</h3>
</div>
			<table class="table table-striped">
				<tr>
					<th width="20%">NIM</th>
					<td><?php echo $nimmah; ?></td>
				</tr>
				<tr>
					<th>Jam Bangun</th>
					<td><?php echo $pilih['jam_bangun']; ?></td>
				</tr>
				<tr>
					<th>Jam Tidur</th>
					<td><?php echo $pilih['jam_tidur']; ?></td>
				</tr>
				<tr>
					<th>Perokok atau tidak</th>
					<td><?php echo $pilih['perokok']; ?> |<b> Begadang </b> <?php echo $pilih['begadang'] ?></td>
				</tr>
				<tr>
					<th>Menonton Film</th>
					<td><?php echo $pilih['menonton_film']; ?></td>
				</tr>
				<tr>
					<th>Mendengar Musik</th>
					<td><?php echo $pilih['mendengar_musik']; ?></td>
				</tr>
				<tr>
					<th>Belajar</th>
					<td><?php echo $pilih['belajar']; ?> | <b>Jam Belajar </b> <?php echo $pilih['jam_belajar'] ?></td>
				</tr>
				<tr>
					<th>Tipe Belajar</th>
					<td><?php echo $pilih['tipe_belajar']; ?></td>
				</tr>
				<tr>
					<th>olahraga</th>
					<td><?php echo $pilih['olahraga']; ?> | <b>Jam Olahraga</b> <?php echo $pilih['jam_olahraga'] ?></td>
				</tr>
				<tr>
					<th>Nongkrong</th>
					<td><?php echo $pilih['nongkrong']; ?> | <b>Jam nongkrong</b> <?php echo $pilih['jam_nongkrong'] ?></td>
				</tr>
				<tr>
					<th>makan</th>
					<td><?php echo $pilih['makan']; ?> | <b>Jam makan</b> <?php echo $pilih['jam_makan'] ?></td>
				</tr>
			</table>
<div class="alert alert-info"><h3>Detail Kesukaan</h3></div>
			<table class="table table-striped">
				<tr>
					<th width="20%">makanan favorit</th>
					<td><?php echo $pilih['makanan_favorit']; ?></td>
				</tr>
				<tr>
					<th>minuman favorit</th>
					<td><?php echo $pilih['minuman_favorit']; ?></td>
				</tr>
				<tr>
					<th>Rokok favorit</th>
					<td><?php echo $pilih['rokok_favorit']; ?></td>
				</tr>
				<tr>
					<th>Buku Favorit</th>
				<td><?php echo $pilih['buku_favorit']; ?></td>
				</tr>
				<tr>
					<th>Musik Favorit</th>
					<td><?php echo $pilih['musik_favorit']; ?></td>
				</tr>
				<tr>
					<th>Film Favorit</th>
					<td><?php echo $pilih['film_favorit']; ?></td>
				</tr>
				<tr>
					<th>Artis Favorit</th>
					<td><?php echo $pilih['artis_favorit']; ?></td>
				</tr>
				<tr>
					<th>Cafe favorit</th>
					<td><?php echo $pilih['cafe_favorit']; ?> | <b>menu favoritnya <?php echo $pilih['menu_favorit_cafe'] ?></td>
				</tr>
				<tr>
					<th>Rumah Makan Favorit</th>
					<td><?php echo $pilih['rumah_makan_favorit']; ?> | <b>Menu Favoritnya</b> <?php echo $pilih['menu_favorit'] ?></td>
				</tr>
				<tr>
					<th>Makanan Ringan Favorit</th>
					<td><?php echo $pilih['makanan_ringan_favorit']; ?></td>
				</tr>
				<tr>
					<th>Minuman Ringan Favorit</th>
					<td><?php echo $pilih['minuman_ringan_favorit']; ?></td>
				</tr>
				<tr>
					<th>Tempat Liburan Favorit</th>
					<td><?php echo $pilih['tempat_liburan_favorit']; ?></td>
				</tr>
				<tr>
					<th>Suasana Belajar Favorit</th>
					<td><?php echo $pilih['suasana_belajar_favorit']; ?></td>
				</tr>
				<tr>
					<th>Hobi</th>
					<td><?php echo $pilih['hobi_favorit']; ?></td>
				</tr>
				<tr>
					<th>Profesi Favorit</th>
					<td><?php echo $pilih['profesi_favorit']; ?></td>
				</tr>
			</table>
<div class="alert alert-info"><h3>Data Kepribadian</h3></div>
			<table class="table table-striped">
				<tr>
					<th width="20%">Teman Akrab</th>
					<td><?php echo $pilih['teman_akrab']; ?></td>
				</tr>
				<tr>
					<th>Komunitas</th>
					<td><?php echo $pilih['komunitas']; ?></td>
				</tr>
				<tr>
					<th>Tipe Pergaulan</th>
					<td><?php echo $pilih['tipe_pergaulan']; ?></td>
				</tr>
				<tr>
					<th>Suka Marah</th>
				<td><?php echo $pilih['suka_marah']; ?></td>
				</tr>
				<tr>
					<th>Mudah Mengantuk</th>
					<td><?php echo $pilih['suka_mengantuk']; ?></td>
				</tr>
				<tr>
					<th>Suka Bercanda</th>
					<td><?php echo $pilih['suka_bercanda']; ?></td>
				</tr>
				<tr>
					<th>Suka Menangis</th>
					<td><?php echo $pilih['suka_menangis']; ?></td>
				</tr>
				<tr>
					<th>Suka Baper</th>
					<td><?php echo $pilih['suka_baper']; ?></td>
				</tr>
				<tr>
					<th>Suka Curiga</th>
					<td><?php echo $pilih['suka_curiga']; ?></td>
				</tr>
				<tr>
					<th>Mudah Jatuh Cinta</th>
					<td><?php echo $pilih['suka_jatuh_cinta']; ?></td>
				</tr>
				<tr>
					<th>Punya Pacar</th>
					<td><?php echo $pilih['punya_pacar']; ?></td>
				</tr>
				<tr>
					<th>Suka Ibadah</th>
					<td><?php echo $pilih['suka_ibadah']; ?></td>
				</tr>
				<tr>
					<th>Suka Penasaran</th>
					<td><?php echo $pilih['suka_penasaran']; ?></td>
				</tr>
				<tr>
					<th>Suka Game</th>
					<td><?php echo $pilih['suka_game']; ?></td>
				</tr>
				<tr>
					<th>Suka Filosofi</th>
					<td><?php echo $pilih['suka_filosofi']; ?></td>
				</tr>
				<tr>
					<th>Suka Lingkugan sekitar</th>
					<td><?php echo $pilih['peka_lingkungan']; ?></td>
				</tr>
				<tr>
					<th>Suka Beramal</th>
					<td><?php echo $pilih['suka_amal']; ?></td>
				</tr>
			</table>			
			
			</div>						
			