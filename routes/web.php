<?php

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

use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('basics/routing/')->group(function () {


    Route::get('/cache', function () {
        return Cache::get('key');
    });


    Route::get('/foo', function () {
        return 'FOO';
    });

    //multiple http methods
    Route::match(['get', 'post'], '/test-match', function () {
        return 'Test Match success';
    });

    //Route::get('form', function () {
    //    return view('form');
    //});
    Route::view('/form', 'form');


    Route::redirect('test-redirect', '/foo', 301);
    //equivalent on Route::redirect('test-redirect', '/foo');


    //Route parameters -----------------------------------------------------------------------------------------------------
    Route::get('user/{id}', function ($id) {
        return "User: $id";
    });

    Route::get('user-name/{name?}', function ($name = 'John') {
        return $name;
    })->where('name', '[A-Za-z]+');

    Route::get('custom-id/{id}', function ($id) {
        return $id;
    });


    //Named Route ----------------------------------------------------------------------------------------------------------
    Route::get('/test-named-route', function () {
        return 'named route';
    })->name('namedRoute');

});

Route::prefix('basics/middleware/')->group(function () {

    Route::get('test-age/{age}', function ($age) {
        return 'test age: ' . $age;
    })->middleware('check.age');

});
