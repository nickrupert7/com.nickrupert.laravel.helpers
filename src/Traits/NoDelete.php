<?php

namespace Helium\LaravelHelpers\Traits;

use Helium\LaravelHelpers\Exceptions\NoDeleteException;

trait NoDelete
{
    private static function throwNoDeleteException()
    {
        throw new NoDeleteException(static::class);
    }

    public static function bootNoDelete()
    {
        static::deleting(function() {
            static::throwNoDeleteException();
        });
    }
}