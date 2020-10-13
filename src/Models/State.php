<?php

namespace Helium\LaravelHelpers\Models;

use Helium\LaravelHelpers\Traits\NoCreate;
use Helium\LaravelHelpers\Traits\NoDelete;
use Helium\LaravelHelpers\Traits\NoEdit;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * State Model
 *
 * Properties
 * --------------------
 * @property int id
 * @property string name
 * @property string iso_3166_2
 * @property string abbreviation
 * @property string country_code
 *
 * Scopes
 * --------------------
 * @method static Builder US()
 */
class State extends Model
{
    use NoCreate;
    use NoEdit;
    use NoDelete;

    public function scopeUS(Builder $query)
    {
        return $query->where('country_code', 'US');
    }

    public function getAbbreviationAttribute()
    {
        return $this->iso_3166_2;
    }
}