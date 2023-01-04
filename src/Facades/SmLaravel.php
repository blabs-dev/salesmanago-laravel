<?php

namespace Blabs\SmLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Blabs\SmLaravel\SmLaravel
 */
class SmLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Blabs\SmLaravel\SmLaravel::class;
    }
}
