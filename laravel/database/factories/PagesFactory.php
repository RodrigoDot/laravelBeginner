<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
  $name = $faker->name;
  $paragraph = '<p>' . implode('</p><p>', $faker->paragraphs) . '</p>';
    return [
        'title' => $name,
        'url' => str_slug($name),
        'body' => $paragraph
    ];
});
