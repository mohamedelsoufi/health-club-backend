<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'APILocalization'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', 'AuthController@register');
        Route::get('user/verify/{verification_code}', 'AuthController@verifyUser')->name('user.verify');
        Route::post('login', 'AuthController@login');
        Route::post('forgot-password', 'AuthController@forgetPassword');
        Route::post('reset-forgot-password', 'AuthController@resetForgottenPassword');
        Route::post('update-token', 'AuthController@updateToken');
    });

    // home route
    Route::get('home', 'HomeController')->name('home.index');

    // gym class route
    Route::get('gym-classes', 'GymClassesController')->name('gym-classes.index');

    // branch routes
    Route::get('branches', 'BranchController')->name('branches.index');

    // trainer routes
    Route::get('trainers', 'TrainerController')->name('trainers.index');

    // gallery routes
    Route::get('galleries', 'GalleryController')->name('galleries.index');

    // blog routes
    Route::get('blog', 'BlogController@index')->name('blog.index');

    // events routes
    Route::get('events', 'EventController@index')->name('blog.index');
    Route::post('events/subscribe', 'EventController@subscribe');

    // contact routes
    Route::post('contact', 'ContactController');

    // setting route
    Route::get('settings', 'SettingController')->name('settings.index');


// authenticated routes
    Route::group(['middleware' => ['jwt.verify:api']], function () {
        Route::group(['namespace' => 'Auth'], function () {
            Route::post('logout', 'AuthController@logout');
            // user routes
            Route::get('profile', 'AuthController@profile');
            Route::post('update', 'AuthController@update');
            Route::post('change-password', 'AuthController@changePassword');
        });
    });

});
