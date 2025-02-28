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

Route::get('/admin/users',function(){
    return view('admin.users');
});

Route::get('/admin/posts',function(){
    $posts = [
        [
            'id' => 1,
            'title' => 'Introduction to Web Development',
            'author' => 'John Doe',
            'category' => 'Technology',
            'status' => 'Published',
            'date' => '2024-03-15 14:30',
            'views' => '2.5k',
            'thumbnail' => 'https://picsum.photos/100'
        ],
        [
            'id' => 2,
            'title' => 'UI Design Principles',
            'author' => 'Jane Smith',
            'category' => 'Design',
            'status' => 'Draft',
            'date' => '2024-03-14 09:15',
            'views' => '0',
            'thumbnail' => 'https://picsum.photos/101'
        ],
        [
            'id' => 3,
            'title' => 'Business Strategy 2024',
            'author' => 'Robert Brown',
            'category' => 'Business',
            'status' => 'Archived',
            'date' => '2024-03-10 16:45',
            'views' => '5.1k',
            'thumbnail' => 'https://picsum.photos/102'
        ],
    ];
    return view('admin.posts',['posts'=>$posts]);
});

Route::get('/admin/check',function(){
    //return redirect()->back()->with('success', 'Post is created');

    //return redirect()->back()->with('warning', 'Post is not deleted');

    //return redirect()->back()->with('info', 'Post is not edited');

    //return redirect()->back()->with('error', 'The action is unauthorized');

    return redirect()->back()->withErrors(['The action is unauthorized']);
});

Route::get('admin/post/create',function(){
    return view('admin.create-post');
});