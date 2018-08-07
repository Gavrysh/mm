<?php

namespace Gss\Traits;

trait HelloWorld
{
    public function helloWorld()
    {
        echo 'Hello, World!<br>';
    }

    public function boot()
    {
        echo 'Method from trait HelloWorld<br>';
    }
}