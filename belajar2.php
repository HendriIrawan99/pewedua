<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
$mahasiswa=
			[
				[
					"id"=>1,
					"nama"=>"Hendri",
				],
				[
					"id"=>2,
					"nama"=>"Irawan",
				],

				[
					"id"=>3,
					"nama"=>"Irawasss",
				]

			];

	echo $mahasiswa[0]['nama'];
	 ?>


<form action="proses.php" method="POST">
	<table border="1">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>

		<tr>
			<td>password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>


		<tr>
			<td>jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="pass">Pria
				<input type="radio" name="pass">Wanita
			</td>
		</tr>


		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="checkbox" name="pass">Pria<br>
				<input type="checkbox" name="pass">Wanita
			</td>
		</tr>


		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td>
				<select name="nama mahasiswa">
					<<?php 
					foreach ($mahasiswa as $mhs) :
					 ?>
					<option value="<?php echo $mhs['id']; ?>">
						<?php echo $mhs['nama']; ?>

					</option>
				<?php endforeach ?>
				</select>
			</td>
		</tr>
	</table>
	<input type="submit" name="submit" value="submit">

</form>

</body>
</html>