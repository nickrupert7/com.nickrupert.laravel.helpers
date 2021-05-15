<?php

namespace Tests\Tests\Traits;

use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Czim\NestedModelUpdater\Traits\NestedUpdatable;
use NickRupert\LaravelHelpers\Exceptions\ValidationException;
use NickRupert\LaravelHelpers\Traits\BulkActions;
use NickRupert\LaravelHelpers\Traits\DefaultOrdering;
use NickRupert\LaravelHelpers\Traits\FillableOnCreate;
use NickRupert\LaravelHelpers\Traits\GeneratesPrimaryKey;
use NickRupert\LaravelHelpers\Traits\HasAttributeEvents;
use NickRupert\LaravelHelpers\Traits\HasEnums;
use NickRupert\LaravelHelpers\Traits\NickRupertBaseTraits;
use NickRupert\LaravelHelpers\Traits\ModelSearch;
use NickRupert\LaravelHelpers\Traits\SelfValidates;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Tests\Models\SelfValidatesModel;
use Tests\Models\SelfValidatesModel2;
use Tests\TestCase;

/**
 * Note: It is not necessary to test every possible validation rule, since
 * SelfValidates makes use of Laravel's built-in validator.
 *
 * Rather, unit tests should cover the successful use of the suppliedconfiguration,
 * including validation rules, messages, and validatesOnSave.
 */
class NickRupertBaseTraitsTest extends TestCase
{
	public function testHasTraits()
	{
		$uses = class_uses(NickRupertBaseTraits::class);

		$this->assertContains(GeneratesPrimaryKey::class, $uses);
		$this->assertContains(HasAttributeEvents::class, $uses);
		$this->assertContains(HasEnums::class, $uses);
		$this->assertContains(SelfValidates::class, $uses);
		$this->assertContains(SoftDeletes::class, $uses);
		$this->assertContains(SoftCascadeTrait::class, $uses);
		$this->assertContains(DefaultOrdering::class, $uses);
		$this->assertContains(BulkActions::class, $uses);
		$this->assertContains(FillableOnCreate::class, $uses);
		$this->assertContains(ModelSearch::class, $uses);
	}
}