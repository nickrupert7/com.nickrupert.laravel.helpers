<?php

namespace Helium\LaravelHelpers\Traits;

use Helium\LaravelHelpers\Exceptions\NoEditException;

trait NoEdit
{
    private static function throwNoEditException()
    {
        throw new NoEditException(static::class);
    }

    public static function bootNoEdit()
    {
        static::updating(function () {
            static::throwNoEditException();
        });
    }
}