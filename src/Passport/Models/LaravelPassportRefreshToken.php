<?php

namespace NickRupert\LaravelHelpers\Passport\Models;

use NickRupert\LaravelHelpers\Traits\GeneratesPrimaryKey;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\Token;

class LaravelPassportRefreshToken extends Token
{
    use GeneratesPrimaryKey;
    use SoftDeletes;

    public $primaryKeyPrefix = 'PP-RTK';
}