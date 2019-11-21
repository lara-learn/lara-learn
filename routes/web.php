<?php

declare(strict_types=1);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/courses', 'CourseController@index')->name('courses.index');
