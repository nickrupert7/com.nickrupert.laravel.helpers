<?php

namespace Tests\Tests\Traits;

use Tests\Models\LaravelBaseTraitsModel;

/**
 * Inherits all test cases from HasAttributeEventsTest
 */
class LaravelBaseHasAttributeEventsTest extends HasAttributeEventsTest
{
	protected const TEST_CLASS = LaravelBaseTraitsModel::class;
}