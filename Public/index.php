<?php

class Room
{
    /**
     * @var string
     */
    private $color = 'red';

    /**
     * @var int
     */
    protected $windows = 4;

    /**
     * @var bool
     */
    public $lamp = true;

    /**
     *
     */
    public function getColor()
    {
        echo $this->color;
    }

    /**
     * @param $color
     */
    public function setColor($color)
    {
        echo $this->color = $color;
    }
}

$room = new Room();

$room->lamp;
echo '<h4>Print public property</h4>';
echo $room->lamp;
echo '<br>';

echo 'Now light is ';
echo $room->lamp ? 'on' : 'off';
echo '<br>';

//echo $room->windows; // 'Error. Will not work. Protected property.'

//echo $room->color; // 'Error. Will not work. Private property.'

echo '<h3>End of script</h3>';