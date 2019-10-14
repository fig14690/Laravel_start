<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts=\App\Post::latest()->paginate(5);


    return view ('index',[
        'posts'=>$posts
    ]);
});

Route::get('/post', function(){
    return view ('post');
});

Route::get('/blog', function(){
    return view ('blog');
});

Route::get('/about', function(){
    return view ('about');
});

Route::get('/contact', function(){
    return view ('contact');
});

Route::get('/typography', function(){
    return view ('typography');
});

Route::get('/test', function(){
    $result=factory(\App\Category::class, 10)->create();
    dd($result);
});