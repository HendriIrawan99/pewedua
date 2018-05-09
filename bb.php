<!DOCTYPE html>
<html>
<head>
	<title>membuat table</title>
</head>
<body>
<h1>pendataan mahasiswa</h1>

<table>
<tr>
	<td><label for="nama">Nama</label></td>
	<td>:</td>
	<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
</tr>
<tr>
	<td><label for="username">Username</label></td>
	<td>:</td>
	<td><input type="text" name="username" placeholder="Username"></td>
</tr>
<tr>
	<td><label for="password">Password</label></td>
	<td>:</td>
	<td><input type="password" name="password" placeholder="Password"></td>
</tr>
<tr>
	<td><label for="alamat">Alamat</label></td>
	<td>:</td>
	<td><textarea name="alamat" placeholder="Alamat"></textarea></td>
</tr>
<tr>
	<td><label for="No HP">No HP</label></td>
	<td>:</td>
	<td><input type="number" name="no hp" placeholder="No HP"></td>
</tr>
<tr>
	<td><label for="jenis kelamin">Jenis Kelamin</label></td>
	<td>:</td>
	<td><input type="radio" name="0">Laki-Laki
		<input type="radio" name="1">Perempuan
	</td>
</tr>
<tr>
	<td><label for="prodi">Prodi</label></td>
	<td>:</td>
	<td><input type="checkbox" name="1">sisfo <br>
		<input type="checkbox" name="2">siskom <br>
		<input type="checkbox" name="3">biologi <br>
	</td>
</tr>
<tr>
	<td colspan="4"><input type="submit" name="simpan" value="Simpan"></td>
</tr>

</table>
</body>
</html>