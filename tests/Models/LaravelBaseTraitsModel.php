<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\LaravelBaseTraits;
use Tests\Models\Base\SetupGeneratesPrimaryKey;
use Tests\Models\Base\SetupHasAttributeEvents;
use Tests\Models\Base\SetupHasEnums;
use Tests\Models\Base\SetupSelfValidates;
use Tests\Models\Base\TestModel;

class LaravelBaseTraitsModel extends TestModel
{
	use LaravelBaseTraits;
	use SetupGeneratesPrimaryKey;
	use SetupHasAttributeEvents;
	use SetupHasEnums;
	use SetupSelfValidates;
}