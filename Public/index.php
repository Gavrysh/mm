<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

chdir(dirname(__DIR__));

require_once './Src/Gss/Core/App.php';
require_once './App/App.php';
require_once './App/Data1.php';
require_once './App/Data2.php';

$obj1 = new \App\App();
$data1 = new \App\Data1();
$data2 = new \App\Data2();

$obj1->run($data1);