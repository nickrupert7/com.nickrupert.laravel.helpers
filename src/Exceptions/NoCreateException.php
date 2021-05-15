<?php

namespace NickRupert\LaravelHelpers\Exceptions;

class NoCreateException extends \RuntimeException
{
    public function __construct(string $class)
    {
        parent::__construct("$class cannot be created. See NickRupert\LaravelHelpers\Traits\NoCreate");
    }
}