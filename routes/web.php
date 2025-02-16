<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/posts',function(){
    return view('blog.posts');
});



Route::get('/post/1',function(){
    
    return view('blog.post-detail');
    
});