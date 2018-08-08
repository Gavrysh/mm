<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

chdir(dirname(__DIR__));

require_once './vendor/autoload.php';

(new Gss\Core\ErrorHandler())->register();

require_once './App/errors.php';