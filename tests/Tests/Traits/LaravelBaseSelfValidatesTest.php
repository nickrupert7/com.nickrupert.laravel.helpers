<?php

namespace Tests\Tests\Traits;

use Tests\Models\LaravelBaseTraitsModel;
use Tests\Models\LaravelBaseTraitsModel2;

/**
 * Inherits all test cases from SelfValidatesTest
 */
class LaravelBaseSelfValidatesTest extends SelfValidatesTest
{
	protected const TEST_CLASS = LaravelBaseTraitsModel::class;
	protected const TEST_CLASS_2 = LaravelBaseTraitsModel2::class;
}