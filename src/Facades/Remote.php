<?php

namespace Sosupp\Remote\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sosupp\Remote\Remote
 */
class Remote extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-remote';
    }
}
