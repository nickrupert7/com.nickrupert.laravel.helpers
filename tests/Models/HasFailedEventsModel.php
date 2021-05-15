<?php

namespace Tests\Models;

use NickRupert\LaravelHelpers\Traits\BulkActions;
use NickRupert\LaravelHelpers\Traits\DefaultOrdering;
use NickRupert\LaravelHelpers\Traits\GeneratesPrimaryKey;
use NickRupert\LaravelHelpers\Traits\HasFailedEvents;
use Tests\Models\Base\TestModel;

class HasFailedEventsModel extends TestModel
{
	use HasFailedEvents;

	protected $fillable = [
		'data'
	];

	public $createDidFail = false;
	public $updateDidFail = false;
	public $saveDidFail = false;

	protected static function boot()
	{
		parent::boot();

        static::createFailed(function (HasFailedEventsModel $model) {
            $model->createDidFail = true;
        });

        static::updateFailed(function (HasFailedEventsModel $model) {
            $model->updateDidFail = true;
        });

        static::saveFailed(function (HasFailedEventsModel $model) {
            $model->saveDidFail = true;
        });
	}
}