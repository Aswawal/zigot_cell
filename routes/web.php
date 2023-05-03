<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'title'=> "Zigot Cell"
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title'=> "posts"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title'=> "about"
    ]);
});

Route::get('/post-details', function () {
    return view('post-details',[
        'title'=> "post-details"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        'title'=> "contact"
    ]);
});

Route::get('/categories', function () {
    return view('categories',[
        'title'=> "categories"
    ]);
});



