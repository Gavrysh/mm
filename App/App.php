<?php

namespace Gss\App;

use Gss\Traits\GoodbyeWorld;
use Gss\Traits\HelloWorld;

/**
 * Class App
 * @package App
 */
final class App
{
    use HelloWorld, GoodbyeWorld {
        HelloWorld::boot insteadof GoodbyeWorld;
    }

    public function __construct()
    {
        echo 'Create Class <b>'.get_class().'</b> from folder <i>Gss/Core/</i><br>';
        $this->helloWorld();
        $this->goodbyeWorld();
        $this->boot();
    }

    public function helloWorld()
    {
        echo 'Hello, World! from '.get_class().'<br>';
    }
}