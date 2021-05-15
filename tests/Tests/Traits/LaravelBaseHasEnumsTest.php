<?php

namespace Tests\Tests\Traits;

use Tests\Models\LaravelBaseTraitsModel;

/**
 * Inherits all test cases from HasEnumsTest
 */
class LaravelBaseHasEnumsTest extends HasEnumsTest
{
	protected const TEST_CLASS = LaravelBaseTraitsModel::class;
}