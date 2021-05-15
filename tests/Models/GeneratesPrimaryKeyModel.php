<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\GeneratesPrimaryKey;
use Tests\Enums\Color;
use Tests\Models\Base\SetupGeneratesPrimaryKey;
use Tests\Models\Base\TestModel;

class GeneratesPrimaryKeyModel extends TestModel
{
	use GeneratesPrimaryKey;
	use SetupGeneratesPrimaryKey;
}