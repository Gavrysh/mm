<?php

class Room
{
    private $color = 'red';
    public $variable = 'something';

    public function getColor()
    {
        echo $this->color;
    }

    public function setColor($color)
    {
        echo $this->color = $color;
    }

    public function getVariable()
    {
        echo $this->variable;
    }
}

$room = new Room();

$room->getColor();
echo '<br>';
$room->getVariable();