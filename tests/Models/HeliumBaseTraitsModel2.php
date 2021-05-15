<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\NickRupertBaseTraits;
use Tests\Models\Base\SetupGeneratesPrimaryKey;
use Tests\Models\Base\SetupHasAttributeEvents;
use Tests\Models\Base\SetupHasEnums;
use Tests\Models\Base\SetupSelfValidates2;
use Tests\Models\Base\TestModel;

class NickRupertBaseTraitsModel2 extends TestModel
{
	use NickRupertBaseTraits;
	use SetupGeneratesPrimaryKey;
	use SetupHasAttributeEvents;
	use SetupHasEnums;
	use SetupSelfValidates2;

	protected $table = 'nickrupert_base_traits_models';
}