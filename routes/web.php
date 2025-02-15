<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/posts',function(){
    return view('blog.posts');
});

Route::get('/check',function(){
    
    return redirect()->route('home')->with('warning', 'Post created successfully!');
    
});