<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\HasAttributeEvents;
use NickRupert\LaravelHelpers\Traits\HasEnums;
use Tests\Models\Base\SetupHasEnums;
use Tests\Models\Base\TestModel;

class HasEnumsModel extends TestModel
{
    use HasAttributeEvents;
	use HasEnums;
	use SetupHasEnums;
}