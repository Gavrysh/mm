<?php

namespace App;

use Gss\Core\App as CoreApp;
/**
 * Class App
 * @package App
 */
class App extends CoreApp
{
    public function __construct()
    {
        parent::__construct();
        echo 'Create Class <b>'.get_class().'</b> from folder <i>Gss/Core/</i><br>';
    }
}