<?php

spl_autoload_register(function($class) {
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$hen='hendri';
str_replace('i','a',$hen);

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
$v= new \model\Mahasiswa;
$v->test();

 ?>