<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

// Episode 8: Route to Controller
Route::get('/posts/{post}', [PostsController::class, 'show']);