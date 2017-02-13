<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
 use App\Entity\Member;
Route::get('/', function () {
    return view('welcome');
    // return Member::all();
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/test', function () {
    return 'page test ...';
});
