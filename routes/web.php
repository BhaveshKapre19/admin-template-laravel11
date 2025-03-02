<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
| These routes are accessible to all users without authentication.
| They include the homepage, blog posts, and the about page.
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/posts', function () {
    return view('blog.posts');
});

Route::get('/post/1', function () {
    return view('blog.post-detail');
});

Route::get('/about-me', function () {
    return view('blog.about');
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
| These routes handle user authentication, including login, registration, 
| password reset, and account-related notices.
*/

Route::prefix('auth')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/register', function () {
        return view('auth.register');
    });

    Route::get('/password/reset/request', function () {
        return view('auth.password-reset-request');
    });

    Route::get('/password/reset', function () {
        return view('auth.password-reset-form');
    });

    Route::get('/email/not-verified', function () {
        return view('auth.email-notice');
    });

    Route::get('/account/disabled', function () {
        return view('auth.account-disabled');
    });
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
| These routes are accessible to admin users only. They include dashboard, 
| profile management, user management, and post management.
*/

Route::prefix('admin')->group(function () {
    // Admin Dashboard
    Route::get('/', function () {
        return view('admin.dashbord');
    });

    // Profile Management
    Route::get('/profile', function () {
        return view('admin.profile');
    });

    Route::get('/profile/edit', function () {
        return view('admin.edit-profile');
    });

    // User Management
    Route::get('/users', function () {
        return view('admin.users');
    });

    // Post Management
    Route::get('/posts', function () {
        // Dummy post data for testing
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
        return view('admin.posts', ['posts' => $posts]);
    });

    // Create and Edit Posts
    Route::get('/post/create', function () {
        return view('admin.create-post');
    });

    Route::get('/post/edit/{slug}', function () {
        return view('admin.create-post');
    });
    
    Route::get('/category', function () {
        return view('admin.category');
    });

    /*
    |--------------------------------------------------------------------------
    | Admin Check Route (For Flash Messages)
    |--------------------------------------------------------------------------
    | This route is used for testing flash messages and redirects. 
    | Uncomment the required line to test different flash messages.
    */

    Route::get('/check', function () {
        // return redirect()->back()->with('success', 'Post is created');
        // return redirect()->back()->with('warning', 'Post is not deleted');
        // return redirect()->back()->with('info', 'Post is not edited');
        // return redirect()->back()->with('error', 'The action is unauthorized');

        return redirect()->back()->withErrors(['The action is unauthorized']);
    });

});
