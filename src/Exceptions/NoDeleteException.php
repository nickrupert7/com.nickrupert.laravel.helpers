<?php

namespace NickRupert\LaravelHelpers\Exceptions;

class NoDeleteException extends \RuntimeException
{
    public function __construct(string $class)
    {
        parent::__construct("$class cannot be deleted. See NickRupert\LaravelHelpers\Traits\NoDelete");
    }
}