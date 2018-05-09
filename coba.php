<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Judul Paragraf</h1>
	<?php
	$logika = true;
	$logika_dua = false;


	if ($logika&&$logika_dua) {
		echo "<br><br>ini bisa jalan";
	}else{
		echo "<br><br>tidak bisa jalan";
	}
	?>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	<?php
	echo $angka;
	?>

	<h2> <?php echo $subjudul;?> </h2>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</body>
</html>




<!-- <?php

//ini meupakan komentar

// echo "Ini adalah tester <br>";
// echo "Nama saya adalah hendri irawan <br><br>";

//komentar yang tertulis disini
//ia tk kan pernah kuanggap

// $angka = "satu";
// $lagi ="satu";
// $kata = 2;

// echo $angka.$kata.$lagi."<br>";
// echo "Berat Badan Adik Saya Adalah ".$kata." Kg";


  ?> -->