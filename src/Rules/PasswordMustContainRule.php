<?php

namespace NickRupert\LaravelHelpers\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordMustContainRule implements Rule
{
	protected $pattern;
	protected $minOccurrences;

	public function __construct(string $pattern, int $minOccurrences = 1)
	{
		$this->pattern = $pattern;
		$this->minOccurrences = $minOccurrences;
	}

	public function passes($attribute, $value)
	{
		return preg_match_all($this->pattern, $value) >= $this->minOccurrences;
	}

	public function message()
	{
		return trans('laravelHelpers::error.password.contains', [
			'pattern' => $this->pattern,
			'count' => $this->minOccurrences
		]);
	}
}