<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\LaravelBaseTraits;
use Tests\Models\Base\SetupGeneratesPrimaryKey;
use Tests\Models\Base\SetupHasAttributeEvents;
use Tests\Models\Base\SetupHasEnums;
use Tests\Models\Base\SetupSelfValidates2;
use Tests\Models\Base\TestModel;

class LaravelBaseTraitsModel2 extends TestModel
{
	use LaravelBaseTraits;
	use SetupGeneratesPrimaryKey;
	use SetupHasAttributeEvents;
	use SetupHasEnums;
	use SetupSelfValidates2;

	protected $table = 'nickrupert_base_traits_models';
}