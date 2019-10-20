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
    // function multiply() {
    //     return  a * b;
    //   }
      
    $posts=\App\Post::latest()->paginate(5);


    return view ('index',[
        'posts'=>$posts
    ]);
})->name('home');

Route::get('/post/{post}', function(\App\Post $post){
    // $posts=\App\Post::find($id);
    $post->increment('views');
    return view ('post', ['post'=>$post]);
})->name('blog.post');

Route::get('/blog', function(){
    $posts=\App\Post::latest()->paginate(5);

    return view ('blog', ['posts' => $posts]);
})->name('blog.blog');


// Вывод постов по категории со slug
Route::get('/blog/category/{slug}', function($slug){

    $posts=\App\Category::where('slug', '=', $slug)->first()->posts()->latest()->paginate(7);

// Вывод постов по категории с id

// Route::get('/blog/category/{category}', function(\App\Category $category){
//     $posts=$category->posts()->paginate(5); 

    // $posts=\App\Post::where('category_id', '=', $category->id)->latest()->paginate(7);
    
    return view ('blog', ['posts' => $posts]);
})->name('blog.blog-by-category');

// Вывод постов по тегам
Route::get('/blog/tag/{slug}', function($slug){

   $posts=\App\Tag::where('slug', '=', $slug)->first()->posts()->latest()->paginate(7);

    return view ('blog', ['posts' => $posts]);
})->name('blog.blog-tag');

// Вывод постов по автору
Route::get('/blog/author/{id}', function($id){

    $posts=\App\User::where('id', '=', $id)->first()->posts()->latest()->paginate(7);
 
    // dd($posts);
     return view ('blog', ['posts' => $posts]);
 })->name('blog.blog-author');


 
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