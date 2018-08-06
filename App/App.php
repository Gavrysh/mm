<?php

namespace App;

use Gss\Core\Application;
/**
 * Class App
 * @package App
 */
class App extends Application
{
    public function __construct()
    {
        parent::__construct();
        echo 'Create Class <b>'.get_class().'</b> from folder <i>Gss/Core/</i><br>';
    }

    public function run()
    {

    }
}