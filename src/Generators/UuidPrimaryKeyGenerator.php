<?php

namespace Helium\LaravelHelpers\Generators;

use Helium\LaravelHelpers\Contracts\IdGenerator;
use Helium\LaravelHelpers\Helpers\StringHelper;

class UuidPrimaryKeyGenerator extends IdGenerator
{
	/**
	 * @description Get the model prefix
	 * @return string
	 */
	protected function getPrefix(): string
	{
		if (isset($this->model->primaryKeyPrefix))
		{
			return $this->model->primaryKeyPrefix;
		}

		$namespace = explode('\\', get_class($this->model));
		$className = array_pop($namespace);

		return strtoupper(substr($className, 0, 3));
	}

	/**
	 * @description Generate a prefixed UUID primary key for the model
	 * @return string
	 */
	public function generate(): string
	{
		$prefix = $this->getPrefix();
		$uuid = StringHelper::uuid(false);

		return "{$prefix}-{$uuid}";
	}
}