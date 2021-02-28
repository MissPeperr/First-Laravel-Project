<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

// From Episode 5 laracasts
// Route::get('/test', function () {
//     return view('test');
// });

// Episode 6: Pass Request Data to View
Route::get('/', function () {
    // Setting up a query string param
    $name = request('name');
    $nono = request('nono');

    // Any key within the array will be available to the view
    return view('test', [
        'name' => $name,
        'nono' => $nono
    ]);
});

//  Episode 7: Route Wildcards
Route::get('/posts/{post}', function ($post) {
    /* 
        Setting up some data since we don't have a DB yet
            This is an Associative Array. Associative arrays are arrays that use named keys that you assign to them.
    */
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post',
        'my-second-post' => 'Now I am getting the hand of this blogging thing!'
    ];

    //  If param from the URL is not a key in the posts
    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});
