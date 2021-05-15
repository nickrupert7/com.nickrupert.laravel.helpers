<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\FillableOnCreate;
use Tests\Models\Base\TestModel;

class FillableOnCreateModel extends TestModel
{
    use FillableOnCreate;

    protected $fillable = [
        'fillable_attribute'
    ];

    protected $fillableOnCreate = [
        'not_fillable_attribute'
    ];
}