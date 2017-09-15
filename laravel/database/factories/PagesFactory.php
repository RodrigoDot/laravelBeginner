<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
  $name = $faker->name;
    return [
        'title' => $name,
        'url' => str_slug($name),
        'body' => $faker->paragraphs
    ];
});
