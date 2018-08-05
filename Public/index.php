<?php

class Room
{
    static private $count = 0;
    static private $destructedObjectsCount = 0;

    public function __construct()
    {
        ++self::$count;
        echo 'The object was created '.self::$count.' times<br>';
    }

    public function __invoke()
    {
        echo 'The method was caused by as function<br>';
    }

    public function __destruct()
    {
        if (self::$destructedObjectsCount == 0) {
            echo 'The following objects are destroyed: ';
        }
        echo self::$destructedObjectsCount += 1;
        echo '-th, ';
    }

    public function __call($name, $arguments)
    {
        echo 'Undefined method: <b>'.$name.'</b> in class - <b>'.get_class($this).'</b><br>';
    }

    public static function __callStatic($name, $arguments)
    {
        echo 'Undefined static method: <b>'.$name.'</b> in class - <b>'.get_class().'</b><br>';
    }
}

for ($i = 0; $i < rand(10, 60); ++$i) {
    $obj{$i} = new Room();
}

$object = new Room();
$object();
$object->undefMethod();
Room::undefStaticMethod();