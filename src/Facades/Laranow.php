<?php

namespace JakyeRU\Laranow\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JakyeRU\Laranow\Laranow
 */
class Laranow extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \JakyeRU\Laranow\Laranow::class;
    }
}
