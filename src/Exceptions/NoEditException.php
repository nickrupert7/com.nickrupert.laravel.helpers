<?php

namespace Helium\LaravelHelpers\Exceptions;

class NoEditException extends \RuntimeException
{
    public function __construct(string $class)
    {
        parent::__construct("$class cannot be edited. See Helium\LaravelHelpers\Traits\NoEdit");
    }
}