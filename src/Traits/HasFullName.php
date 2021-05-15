<?php

namespace NickRupert\LaravelHelpers\Traits;

use NickRupert\LaravelHelpers\Helpers\StringHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException as IlluminateValidationException;
use NickRupert\LaravelHelpers\Exceptions\ValidationException as NickRupertValidationException;

trait HasFullName
{
	public function getFirstName()
	{
		$firstNameAttribute = $this->firstNameAttribute ?? 'first_name';
		return $this->$firstNameAttribute ?? '';
	}

	public function getLastName()
	{
		$lastNameAttribute = $this->lastNameAttribute ?? 'last_name';
		return $this->$lastNameAttribute ?? '';
	}

	public function getFullNameAttribute()
	{
		return $this->getFirstName() . ' ' . $this->getLastName();
	}
}