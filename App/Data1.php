<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 06.08.18
 * Time: 13:13
 */

namespace App;


class Data1
{
    private $lessons = 'This is first data (Data1)!<br>';

    public function get()
    {
        return $this->lessons;
    }
}