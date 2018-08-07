<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

chdir(dirname(__DIR__));

//require_once './Src/Gss/Core/Application.php';
//require_once './App/App.php';

/*function myAutoload($class)
{
    $array = explode('\\', $class);
    switch ($array[0]) {
        case 'App':
            require_once './'.implode(DIRECTORY_SEPARATOR, $array).'.php';
            break;
        case 'Gss':
            require_once './Src/'.implode(DIRECTORY_SEPARATOR, $array).'.php';
            break;
    }
}

spl_autoload_register('myAutoload');*/

require_once './vendor/autoload.php';

$app = new \Gss\App\App();

$data1 = new \Gss\App\Data1();
echo $data1->getLessons();

$data2 = new \Gss\App\Data2();
echo $data2->getLessons();