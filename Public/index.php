<?php

class Room
{
    public static $lacation = 'Inside the hose';

    public static function setLocation($location)
    {
        self::$lacation = $location;
    }
}

echo Room::$lacation;
echo '<br>';

Room::setLocation('Inside the hose on Mars');

echo '<h3>But this modified property:</h3>';
echo Room::$lacation;