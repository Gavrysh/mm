<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

chdir(dirname(__DIR__));
require_once 'App/App.php';
require_once 'Src/Gss/Core/App.php';

$obj1 = new \App\App();
$obj2 = new \Gss\Core\App();