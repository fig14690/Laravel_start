<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     UsersTableSeeder::class,
        //     PostsTableSeeder::class,
        //     CommentsTableSeeder::class,
        // ]);
        // factory(\App\Category::class, 10)->create();
        factory(\App\User::class, 20)->create();
        


        $categories=[
            ['name'=>'Features', 'slug'=>'features'],
            ['name'=>'Food', 'slug'=>'food'],
            ['name'=>'Travel', 'slug'=>'travel'],
            ['name'=>'Recipe', 'slug'=>'recipe'],
            ['name'=>'Bread', 'slug'=>'bread'],
            ['name'=>'Breakfast', 'slug'=>'breakfast'],
            ['name'=>'Meat', 'slug'=>'meat'],
            ['name'=>'Fastfood', 'slug'=>'fastfood'],
            ['name'=>'Salad', 'slug'=>'salad'],
            ['name'=>'Soup', 'slug'=>'soup'],
        ];

        DB::table('categories')->insert($categories);


        factory(\App\Post::class, 50)->create();


        // $post=[
        //     [   'user_id'=>rand(1,10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_cover'=>rand(1, 10).'.jpg'],
        //     [   'user_id'=>rand(1, 10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> '
        //         Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'pre_cover'=>rand(1, 10).'.jpg'],
        //     [   'user_id'=>rand(1, 10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> '
        //         Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'pre_cover'=>rand(1, 10).'.jpg'],  
        //     [   'user_id'=>rand(1, 10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> '
        //         Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'pre_cover'=>rand(1, 10).'.jpg'],  
        //     [   'user_id'=>rand(1, 10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> '
        //         Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'pre_cover'=>rand(1, 10).'.jpg'],
        //     [   'user_id'=>rand(1, 10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> '
        //         Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'pre_cover'=>rand(1, 10).'.jpg'],
        //     [   'user_id'=>rand(1, 10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> '
        //         Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'pre_cover'=>rand(1, 10).'.jpg'],
        //     [   'user_id'=>rand(1, 10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> '
        //         Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'pre_cover'=>rand(1, 10).'.jpg'],
        //     [   'user_id'=>rand(1, 10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> '
        //         Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'pre_cover'=>rand(1, 10).'.jpg'],
        //     [   'user_id'=>rand(1, 10), 'category_id'=> rand(1,10), 
        //         'title' => 'Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans',
        //         'pre_text'=> 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.',
        //         'views'=>0,
        //         'body'=> '
        //         Vegetarian Spring Pho with Sweet Potato Noodles and Heirloom Beans
        //         by Sarah Jenks  192  08
        //         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.
        //         CONTINUE READING ',
        //         'created_at'=>date('Y-m-d'),
        //         'pre_image'=>rand(1, 10).'.jpg',
        //         'pre_cover'=>rand(1, 10).'.jpg']
        // ];

        // DB::table('posts')->insert($post);
    }
}
