<?php

namespace Tests\Tests\Traits;

use Tests\Models\NickRupertBaseTraitsModel;

/**
 * Inherits all test cases from GeneratesPrimaryKeyTest
 */
class NickRupertBaseGeneratesPrimaryKeyTest extends GeneratesPrimaryKeyTest
{
	protected const TEST_CLASS = NickRupertBaseTraitsModel::class;
}