<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
  $name = $faker->name;
  $paragraph = '<p>' . implode('</p><p>', $faker->paragraphs) . '</p>';
  $numberId = $faker->numberBetween($min = 1, $max = 10);
    return [
        'title' => $name,
        'url' => str_slug($name),
        'body' => $paragraph,
        'user_id' => $numberId
    ];
});
