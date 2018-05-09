<!DOCTYPE html>
<html>
<head>
	<title>Belajar Array</title>
	 <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Belajar Array</h1>
<?php
$mahasiswa=["Hendri","Bagas","Sri Wahyuni","Avivah","Misbahul"];

//associate array
// $prodi= [
// 		"id"=>1,
// 		"nama"=>"Sisfo",
// 		"kuota"=>"58",
// 		"kaprodi"=>"Pak Ilham"
// 		];

//array multi dimensi
$prodi= [
			[
			"id"=>1,
			"nama"=>"Sisfo",
			"kuota"=>"58",
			"kaprodi"=>"Pak Ilham"
			],
			[
			"id"=>2,
			"nama"=>"Kelautan",
			"kuota"=>"32",
			"kaprodi"=>"Nora"
			],
			[
			"id"=>3,
			"nama"=>"Kimia",
			"kuota"=>"40",
			"kaprodi"=>"Andi"
			],
			[
			"id"=>4,
			"nama"=>"Fisika",
			"kuota"=>"25",
			"kaprodi"=>"Nurhasanah"
			],
			[
			"id"=>5,
			"nama"=>"Biologi",
			"kuota"=>"40",
			"kaprodi"=>"Rizalinda"
			]
		];

?>

<h2>
	<?php
	echo $mahasiswa[1];
	echo "<br>";
	echo $prodi[1]["nama"];
	?>
</h2>

<?php
// $nama=12;
// if ($nama===12):
// 	echo"sama ";
// 	echo"sama";
// endif;
  ?>
<div class="content">
		<div class="col-md-12">




 <table class="table table-hover">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama Prodi</th>
 			<th>Nama Kaprodi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php foreach ($prodi as $prd):?>
 		<tr>
 			<td>
 				<?= $prd['id']; ?>
 			</td>
 			<td><?= $prd['nama']; ?></td>
 			<td><?= $prd['kaprodi']; ?></td>
 		</tr>	
<?php endforeach; ?>
 	</tbody>

 </table>

</div>	
</div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>