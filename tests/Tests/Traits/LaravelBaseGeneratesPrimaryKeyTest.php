<?php

namespace Tests\Tests\Traits;

use Tests\Models\LaravelBaseTraitsModel;

/**
 * Inherits all test cases from GeneratesPrimaryKeyTest
 */
class LaravelBaseGeneratesPrimaryKeyTest extends GeneratesPrimaryKeyTest
{
	protected const TEST_CLASS = LaravelBaseTraitsModel::class;
}