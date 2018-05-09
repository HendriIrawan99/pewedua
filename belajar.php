<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

$dosen=[
		
		[
		'id'=>1,
		'nama'=>"Pak ilham",
		'jurusan'=>"Sistem Informasi",
		],
		[
		'id'=>2,
		'nama'=>"Pak Syahru",
		'Jurusan'=>"Sistem Informasi",
		],
		[
		'id'=>3,
		'nama'=>"Pak Dian",
		'jurusan'=>"Sistem Informasi",
		]	
	];
 ?>

<form action="proses.php">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Dosen</td>
			<td>:</td>
			<td>
				<select>
					<?php 
					foreach ($dosen as $dsn) :
					 ?>
					<option value="<?php echo $dsn['id']; ?>">
						<?php echo $dsn['nama']; ?>
					</option>
					<?php 
					endforeach ?>
				</select>
			</td>
		</tr>
	</table>
</form>


</body>
</html>