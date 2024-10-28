<?php

use App\Livewire\Counter;
use App\Livewire\Post;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;


Route::get('/todo', Todo::class);
Route::get('/counter', Counter::class);
Route::get('/posts', Post::class);

Route::get('/', function () {
    return view('welcome');
});
