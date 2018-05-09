<!DOCTYPE html>
<html>
<head>
	<title>Proses</title>
</head>
<body>
<h1>SELAMAT BERGABUNG</h1>
<p>Anda Terdaftar dengan identitas :</p>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>
			<?php echo $_POST['nama']; ?>
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
			<?php echo $_POST['alamat'];?>
		</td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>
			<?= $_POST['username'];?>
		</td>
	</tr>

</table>


</body>
</html>