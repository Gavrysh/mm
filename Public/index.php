<?php

class Room
{
    public static $lacation = 'Inside the hose';
    public $color = 'red';

    public static function setLocation($location)
    {
        self::$lacation = $location;
    }

    public static function staticSetLocation($location)
    {
        static::$lacation = $location;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}

$myRoom = new Room();
$myRoom->setColor('New color');
echo $myRoom->color;
echo '<br>';

Room::staticSetLocation('New location. Teleported the room together with the house!');
echo Room::$lacation;