<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>

	<?php
	$kabupaten=[
					[
					'id'=>1,
					'nama_kab'=>"Kota Pontianak"
					],
					[
					'id'=>2,
					'nama_kab'=>"Sekadau"
					],
					[
					'id'=>3,
					'nama_kab'=>"Sintang"
					]

				];

	?>

<h1>REGISTRASI</h1>
<form method="POST" action="proses.php">
<table border="0">
<tr>
	<td><label for="nama">Nama</label></td>
	<td>:</td>
	<td><input type="text" name="nama" placeholder="Nama Lengkap"></td>
</tr>
<tr>
	<td>Username</td>
	<td>:</td>
	<td><input type="text" name="username" placeholder="Nama User"></td>
</tr>
<tr>
	<td><label for="password">Password</label></td>
	<td>:</td>
	<td><input type="password" name="password" placeholder="Kata Sandi"></td>
</tr>
<tr>
	<td>ALamat</td>
	<td>:</td>
	<td><textarea placeholder="Alamat Lengkap" name="alamat"></textarea></td>
</tr>
<tr>
	<td><label for="Kabupaten">Kabupaten</label></td>
	<td>:</td>
	<td>
		<select name="kabupaten">
			<?php foreach ($kabupaten as $kab): ?>
			<option value="<?php echo $kab['id']; ?>">

			<?php echo $kab['nama_kab'];?>

		</option>
	<?php  endforeach; ?>
		</select>


	</td>
</tr>
<tr>
	<td>No HP</td>
	<td>:</td>
	<td><input type="number" name="no_hp" placeholder="Nomor HP"></td>
</tr>
<tr>
	<td>Jenis Kelamin</td>
	<td>:</td>
	<td><input type="radio" name="1">
		Pria
		<input type="radio" name="0">
		Wanita
	</td>
</tr>
<tr>
	<td>Pilih Prodi</td>
	<td>:</td>
	<td>
		<input type="checkbox" name="prodi1">
		Sistem Informasi"><br>
		<input type="checkbox" name="prodi2">
		Sistem Komputer<br>
		<input type="checkbox" name="prodi3">
		Informatika<br>
	</td>
</tr>
<tr><td colspan="">
	
</td></tr>
</table>

<input type="submit" name="simpan" value="Simpan">
	<input type="reset" name="reset" value="Reset">
</form>

</body>
</html>