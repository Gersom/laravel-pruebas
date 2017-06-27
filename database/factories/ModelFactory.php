<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Entities\Product::class, function (Faker\Generator $faker) {
    return [
        'price'       => $faker->randomFloat(2, 150, 9999),
        'code'        => $faker->isbn10,
        'description' => $faker->text(450),
        'name'        => $faker->sentence(2),
        'published'   => true,
        'company_id'  => $faker->numberBetween(1, 2)
    ];
});
