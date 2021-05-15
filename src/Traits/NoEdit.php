<?php

namespace NickRupert\LaravelHelpers\Traits;

use NickRupert\LaravelHelpers\Exceptions\NoEditException;

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