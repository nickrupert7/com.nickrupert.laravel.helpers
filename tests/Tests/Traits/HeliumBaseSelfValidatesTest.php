<?php

namespace Tests\Tests\Traits;

use Tests\Models\NickRupertBaseTraitsModel;
use Tests\Models\NickRupertBaseTraitsModel2;

/**
 * Inherits all test cases from SelfValidatesTest
 */
class NickRupertBaseSelfValidatesTest extends SelfValidatesTest
{
	protected const TEST_CLASS = NickRupertBaseTraitsModel::class;
	protected const TEST_CLASS_2 = NickRupertBaseTraitsModel2::class;
}