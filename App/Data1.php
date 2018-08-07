<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 07.08.18
 * Time: 8:26
 */

namespace Gss\App;


class Data1
{
    private $lessons = 'First data<br>';

    public function getLessons()
    {
        return $this->lessons;
    }
}