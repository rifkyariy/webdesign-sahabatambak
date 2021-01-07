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

// root 
Route::get('/', function () {
    return view('home');
});

// demo route
Route::group(['prefix' => 'demo'], function () {
    Route::get('/dashboard', function () {
        return view('admin.demo.demo');
    })->name('demo.dashboard');
    Route::get('/analysis', function () {
        return view('admin.demo.analysis');
    })->name('demo.analysis');
});

// send subscription
Route::post('/send-subscription', 'HomeController@subscribe')->name('subscribe');

// !! Auth -------------------------------------------------------------------------------
Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/pond/list', 'PondController@index')->name('admin.pond.list');
    Route::get('/pond/list/{id}', 'PondController@show');

    Route::get('/pond/add', function () {
        return view('admin.dashboard');
    })->name('admin.pond.add');

    Route::get('/analysis', function () {
        return view('admin.demo.analysis');
    })->name('admin.analysis');
});

Route::group(['prefix' => 'api'], function () {
    Route::get('/pond/list', 'PondController@getPonds')->name('api.pond.list');
});

