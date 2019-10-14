<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Post::class, function (Faker $faker){
    return[
            'user_id'=>rand(1,10), 
            'category_id'=> rand(1,10), 
            'title' => $faker->sentence,
            'pre_text'=> $faker->sentence,
            'views'=>0,
            'body'=> $faker->paragraph,
            'pre_image'=>rand(1, 10).'.jpg',
            'created_at'=>$faker->dateTime,
            'pre_cover'=>rand(1, 10).'.jpg'
    ];
});