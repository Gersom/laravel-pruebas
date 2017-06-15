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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// $factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
//     static $password;
//
//     return [
//         'name'           => $faker->name,
//         'email'          => $faker->unique()->safeEmail,
//         'password'       => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\Entities\Product::class, function (Faker\Generator $faker) {
    return [
        'price'       => $faker->randomFloat(2, 150, 9999),
        'code'        => $faker->isbn10,
        'description' => $faker->text(450),
        'name'        => $faker->sentence(2),
        'published'   => true,
    ];
});

$factory->define(App\Entities\Image::class, function (Faker\Generator $faker) {
    return [
        'original' => $faker->imageUrl(1366, 660),
        'height_50px' => $faker->imageUrl($faker->numberBetween(50, 70), 50),
        'height_150px' => $faker->imageUrl($faker->numberBetween(150, 200), 150),
        'height_500px' => $faker->imageUrl($faker->numberBetween(500, 700), 500),
    ];
});

// $factory->define(App\Entities\People::class, function (Faker\Generator $faker) {
//     return [
//         'first_name' => $faker->firstName(),
//         'last_name' => $faker->lastName,
//         'email' => $faker->email,
//         'gender' => $faker->boolean,
//         'nickname' => $faker->firstName,
//     ];
// });
