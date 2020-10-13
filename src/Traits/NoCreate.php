<?php

namespace Helium\LaravelHelpers\Traits;

use Helium\LaravelHelpers\Exceptions\NoCreateException;

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