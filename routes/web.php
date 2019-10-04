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
    return view('index');
});
Auth::routes();

Route::post('/register', 'Auth\RegisterController@create')->name('register_create');
Route::get('/register', 'Auth\RegisterController@index')->name('register');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/social', 'SocialController@index')->name('social_feed');
Route::post('/social', 'SocialController@add_feed_list')->name('add_feed_list');

Route::get('/post/', 'PostController@index')->name('post-page');
Route::get('/post/{id}', 'PostController@show')->name('post-show');
Route::match(['POST','GET'],'/post/remove', 'PostController@step1')->name('post-remove');
Route::match(['POST','GET'],'/post/add/step-1', 'PostController@step1')->name('post-add-step1');
Route::match(['POST','GET'],'/post/add/step-2', 'PostController@step2')->name('post-add-step2');
Route::match(['POST','GET'],'/post/add/step-3', 'PostController@step3')->name('post-add-step3');
Route::match(['POST','GET'],'/post/add/step-4', 'PostController@step4')->name('post-add-step4');
Route::match(['POST','GET'],'/post/add/step-5', 'PostController@step5')->name('post-add-step5');
Route::match(['POST','GET'],'/post/add/step-6', 'PostController@step6')->name('post-add-step6');
