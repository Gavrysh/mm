<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 07.08.18
 * Time: 10:08
 */

namespace Gss\Traits;


trait GoodbyeWorld
{
    public function goodbyeWorld()
    {
        echo 'Goodbye, World!<br>';
    }

    public function boot()
    {
        echo 'Method from trait GoodbyeWorld<br>';
    }
}