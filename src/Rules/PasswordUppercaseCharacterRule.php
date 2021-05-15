<?php

namespace NickRupert\LaravelHelpers\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordUppercaseCharacterRule extends PasswordMustContainRule
{
	public function __construct(int $minOccurrences = 1)
	{
		parent::__construct('/[A-Z]/', $minOccurrences);
	}

	public function message()
	{
		return trans('laravelHelpers::error.password.uppercase', [
			'count' => $this->minOccurrences
		]);
	}
}