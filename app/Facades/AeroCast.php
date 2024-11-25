<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class AeroCast extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'aerocast';
    }
}
