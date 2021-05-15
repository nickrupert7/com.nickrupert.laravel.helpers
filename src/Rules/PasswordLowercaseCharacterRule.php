<?php

namespace NickRupert\LaravelHelpers\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordLowercaseCharacterRule extends PasswordMustContainRule
{
	public function __construct(int $minOccurrences = 1)
	{
		parent::__construct('/[a-z]/', $minOccurrences);
	}

	public function message()
	{
		return trans('laravelHelpers::error.password.lowercase', [
			'count' => $this->minOccurrences
		]);
	}
}