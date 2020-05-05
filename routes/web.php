<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name ('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show') ->name ('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');


//REST
// /articles  -->inndex(list)
// /articles{id}  -->show
// /articles  -->inndex(list)



Route::get('/test',function() {
    //return view('test');

    /*//2.argüman ile herhangi bir key gönderebiliriz
    $name = request('name');
    // return $name;
    return view('test', [
        'name' => $name
    ]);*/

    return view('test', [
        'name'=> request('name')
    ]);
});

// Route::get('/posts/{post}', function (){
//     return view('post');
// });

// Route::get('/posts/{post}', function ($post){
//     return $post;
// });


// Route::get('/posts/{post}', function ($post){
//     $posts = [
//         'firts_post' => 'Hello my first post!',
//         'second_post' => 'Hello my second post!',
//     ];

//     if(!array_key_exists($post,$posts)) {
//         abort(404, 'Sorry, that post was not found.');
//     }

//     return view('post', [
//         'post' => $posts[$post] 
//     ]);
// });

//Routing to Controllers
//First Way->app->Http->Controllers->Create new php class -> PostsController.php
//Second Way->cmd-> php artisan make:controller PostsController
Route::get('/posts/{post}', 'PostsController@show');
