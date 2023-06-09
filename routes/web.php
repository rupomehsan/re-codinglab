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

Route::get('/', function () {
    return view('frontend.home.index');
});
Route::get('/all-doners', function () {
    return view('frontend.doner.index');
});
Route::get('/blogs', function () {
    return view('frontend.blog.index');
});
Route::get('/blog-details', function () {
    return view('frontend.blog.single-blog');
});


Route::get('/all-projects', function () {
    return view('frontend.project.index');
});



Route::get('/registration', function () {
    return view('frontend.registration.index');
});

Route::get('/admin/login', function () {
    return view('frontend.auth.login');
});


Route::get('/admin/dashboard', function () {
    return view('backend.dashboard.index');
});

Route::get('/admin/category', function () {
    return view('backend.category.index');
});
Route::get('/admin/category/create', function () {
    return view('backend.category.create');
});
