<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Tests\TestModels\TestGeneratesPrimaryKeyModel;
use Tests\TestModels\TestSelfValidatesModel2;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(TestSelfValidatesModel2::class, function (Faker $faker) {
    return [
    	'string' => $faker->word,
	    'int' => $faker->numberBetween(),
	    'bool' => $faker->boolean,
	    'foreign_key' => function (array $testSelfValidatesModel) {
    	    $model = factory(TestGeneratesPrimaryKeyModel::class)->create();
    	    return $model->getKey();
	    }
    ];
});
