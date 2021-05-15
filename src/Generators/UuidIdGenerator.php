<?php

namespace NickRupert\LaravelHelpers\Generators;

use NickRupert\LaravelHelpers\Contracts\IdGenerator;
use NickRupert\LaravelHelpers\Helpers\StringHelper;

class UuidIdGenerator extends IdGenerator
{
    protected $attribute;
    protected $prefix;

    public function __construct(?string $prefix = null)
    {
        $this->prefix = is_null($prefix) ? null : "{$prefix}-";
    }

	/**
	 * @description Generate a prefixed UUID primary key for the model
	 * @return string
	 */
	public function generate(): string
	{
		$uuid = StringHelper::uuid(false);

		return "{$this->prefix}{$uuid}";
	}
}