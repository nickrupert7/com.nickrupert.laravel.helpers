<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\HasFullName;
use Tests\Models\Base\TestModel;

class HasFullNameModel extends TestModel
{
	use HasFullName;

	public $firstNameAttribute = null;
	public $lastNameAttribute = null;
}