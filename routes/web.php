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

Route::get('/', function () {
    return view('landing');
});

Route::post('/subscribe','SubscribeController@subscribe');

// For Offline Page PWA
Route::get('/offline', function() {
    return view('offline');
});

// Auth::routes();
// Auth::routes(['verify' => true]);

// //Mlebu Web e (wes login)
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/jobs', function() {
//     return view('jobs');
// });
// Route::get('/akun', 'AkunController@index');

// Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
// Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');