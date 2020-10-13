<?php

namespace Helium\LaravelHelpers\Exceptions;

class NoDeleteException extends \RuntimeException
{
    public function __construct(string $class)
    {
        parent::__construct("$class cannot be deleted. See Helium\LaravelHelpers\Traits\NoDelete");
    }
}