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

Route::view('/', ('home.index'))->name("home.index");

Route::view('/contact', 'home.contact')->name("home.contact");

Route::get('/post/{id}', function ($id) {
    $posts = [
        1 => ["title" => "First post", "content" => "This is example first post", "is_new" => true],
        2 => ["title" => "Second post", "content" => "This is example second post", "is_new" => false]
    ];
    abort_if(!isset($posts[$id]), 404);
    return view("post.show", ["post" => $posts[$id]]);
})->where("id", "[0-9]+")->name("post.show");
