<?php

namespace NickRupert\LaravelHelpers\Traits;

use NickRupert\LaravelHelpers\Exceptions\NoCreateException;

trait NoCreate
{
    private static function throwNoCreateException()
    {
        throw new NoCreateException(static::class);
    }

    public static function bootNoCreate()
    {
        static::creating(function () {
            static::throwNoCreateException();
        });
    }
}