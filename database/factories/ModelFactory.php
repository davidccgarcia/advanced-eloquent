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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Book::class, function ($faker) {
    return [
        'title' => $faker->name, 
        'description' => $faker->text, 
        'status' => $faker->randomElement(['public', 'draft']),
        'category_id' => $faker->randomElement([1, 2, 3])
    ];
});

$factory->define(App\Exam::class, function ($faker) {
    return [
        'title' => $faker->name
    ];
});

$factory->define(App\Page::class, function ($faker) {
    return [
        'title' => $faker->name, 
        'body' => $faker->text
    ];
});

$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->name, 
        'body' => $faker->text
    ];
});
