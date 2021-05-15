<?php

namespace NickRupert\LaravelHelpers\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordLengthRule implements Rule
{
	protected $minLength;

	public function __construct(int $minLength)
	{
		$this->minLength = $minLength;
	}

	public function passes($attribute, $value)
	{
		return mb_strlen($value) >= $this->minLength;
	}

	public function message()
	{
		return trans('laravelHelpers::error.password.length', [
			'minLength' => $this->minLength
		]);
	}
}