<?php

namespace Gss\App;

/**
 * Class App
 * @package App
 */
class App
{
    public function __construct()
    {
        echo 'Create Class <b>'.get_class().'</b> from folder <i>Gss/Core/</i><br>';
    }

    public function run()
    {
        return 'Return string as parent class.';
    }
}