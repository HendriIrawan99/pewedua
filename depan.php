<?php

spl_autoload_register(function($class) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

use app\View;

$v= new View;
$v->render();

echo "<br><br>";
$v= new \src\View;
$v->render();

echo "<br><br>";
$v= new \src\Mahasiswa;
$v->test();

echo "<br><br>";
\model\Mahasiswa::munculkanNama();

 ?>