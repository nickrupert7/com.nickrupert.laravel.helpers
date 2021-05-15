<?php

namespace NickRupert\LaravelHelpers\Passport\Models;

use NickRupert\LaravelHelpers\Traits\GeneratesPrimaryKey;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\AuthCode;

class LaravelPassportAuthCode extends AuthCode
{
    use GeneratesPrimaryKey;
    use SoftDeletes;

    public $primaryKeyPrefix = 'PP-ACD';
}