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

Route::get('/about-me',function(){
    return view('blog.about');
});


Route::get('/auth/login',function(){
    return view('auth.login');
});

Route::get('/auth/register',function(){
    return view('auth.register');
});

Route::get('/auth/password/reset/request/',function(){
    return view('auth.password-reset-request');
});

Route::get('/auth/password/reset/',function(){
    return view('auth.password-reset-form');
});

Route::get('/auth/email/not-verified/',function(){
    return view('auth.email-notice');
});

Route::get('/auth/account/disabled/',function(){
    return view('auth.account-disabled');
});


Route::get('/admin',function(){
    return view('admin.dashbord');
});

Route::get('/admin/profile',function(){
    return view('admin.profile');
});