<?php

require_once 'app/View.php';
require_once 'src/View.php';

use app\View;

$v= new View;
$v->render();

echo "<br><br>";
$v= new \src\View;
$v->render();


 ?>