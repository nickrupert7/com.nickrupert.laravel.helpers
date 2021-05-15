<?php

namespace NickRupert\LaravelHelpers\Traits;

use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Czim\NestedModelUpdater\Traits\NestedUpdatable;
use Illuminate\Database\Eloquent\SoftDeletes;

trait NickRupertBaseTraits
{
    use BulkActions;
    use DefaultOrdering;
    use FillableOnCreate;
    use HasAttributeEvents;
    use HasEnums;
	use GeneratesPrimaryKey;
    use SoftDeletes;
	use SelfValidates;
	use SoftCascadeTrait;
	use ModelSearch;
}