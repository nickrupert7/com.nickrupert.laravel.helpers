<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\HasAttributeEvents;
use NickRupert\LaravelHelpers\Traits\HasPhoneNumbers;
use Tests\Models\Base\TestModel;

class HasPhoneNumbersModel extends TestModel
{
    use HasAttributeEvents;
	use HasPhoneNumbers;

	public $phoneNumbers = null;
}