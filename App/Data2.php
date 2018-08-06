<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 06.08.18
 * Time: 13:14
 */

namespace App;


class Data2
{
    private $lessons = 'This is second data (Data2)!<br>';

    public function get()
    {
        return $this->lessons;
    }
}