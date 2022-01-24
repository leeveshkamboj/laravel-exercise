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

Route::view('/', 'welcome')->name("home.index");

Route::view('/contact', 'home.contact')->name("home.contact");

$posts = [
    1 => ["title" => "First post", "content" => "This is example first post", "is_new" => true],
    2 => ["title" => "Second post", "content" => "This is example second post", "is_new" => false]
];

Route::get('/posts', function () use ($posts) {
    return view("post.index", ["posts" => $posts]);
})->name("post.index");

Route::get('/post/{id}', function ($id) use ($posts) {
    abort_if(!isset($posts[$id]), 404);
    return view("post.show", ["post" => $posts[$id]]);
})->where("id", "[0-9]+")->name("post.show");
