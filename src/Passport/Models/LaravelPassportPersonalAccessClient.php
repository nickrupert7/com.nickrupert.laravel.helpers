<?php

namespace NickRupert\LaravelHelpers\Passport\Models;

use NickRupert\LaravelHelpers\Traits\GeneratesPrimaryKey;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\PersonalAccessClient;

class LaravelPassportPersonalAccessClient extends PersonalAccessClient
{
    use GeneratesPrimaryKey;
    use SoftDeletes;

    public $primaryKeyPrefix = 'PP-PAC';
}