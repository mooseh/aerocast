<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class OS extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'os';
    }
}
