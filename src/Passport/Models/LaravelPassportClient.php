<?php

namespace NickRupert\LaravelHelpers\Passport\Models;

use NickRupert\LaravelHelpers\Traits\GeneratesPrimaryKey;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\Client;

class LaravelPassportClient extends Client
{
    use GeneratesPrimaryKey;
    use SoftDeletes;

    public $primaryKeyPrefix = 'PP-CLI';

    public function skipsAuthorization()
    {
        return $this->firstParty();
    }
}