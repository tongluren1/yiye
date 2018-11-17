<?php

namespace Admin\Yiye\Facades;

use Illuminate\Support\Facades\Facade;

class Yiye extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yiye';
    }
}