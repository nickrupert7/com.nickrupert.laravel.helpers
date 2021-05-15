<?php

namespace NickRupert\LaravelHelpers\Exceptions;

class NoEditException extends \RuntimeException
{
    public function __construct(string $class)
    {
        parent::__construct("$class cannot be edited. See NickRupert\LaravelHelpers\Traits\NoEdit");
    }
}