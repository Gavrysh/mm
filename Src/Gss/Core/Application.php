<?php

namespace Gss\Core;

/**
 * Class App
 * @package Gss\Core
 */
abstract class Application
{
    public function __construct()
    {
        echo 'Create Class <b>'.get_class().'</b> from folder <i>Gss/Core/</i><br>';
    }

    abstract public function run();

    final public function getFramework()
    {
        return 'Gss Framework';
    }
}