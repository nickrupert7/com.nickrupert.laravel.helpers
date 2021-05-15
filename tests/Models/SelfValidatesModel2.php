<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\SelfValidates;
use Tests\Models\Base\SetupSelfValidates2;
use Tests\Models\Base\TestModel;

class SelfValidatesModel2 extends TestModel
{
	use SelfValidates;
	use SetupSelfValidates2;

	protected $table = 'self_validates_models';
}