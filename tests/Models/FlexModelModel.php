<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\FlexModel;
use Tests\Models\Base\TestModel;

class FlexModelModel extends TestModel
{
	use FlexModel;

	public $flexColumn = null;

	protected $fillable = [
	    'id',
        'created_at',
        'updated_at',
        'required_string',
        'flex_attribute',
        'flex_array'
    ];

	protected $casts = [
		'flex_array' => 'array'
	];
}