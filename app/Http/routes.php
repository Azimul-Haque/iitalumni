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
// index routes
// index routes
Route::get('/', ['as'=>'index.index','uses'=>'IndexController@index']);
Route::get('/journey', ['as'=>'index.journey','uses'=>'IndexController@getJourney']);
Route::get('/constitution', ['as'=>'index.constitution','uses'=>'IndexController@getConstitution']);
Route::get('/faq', ['as'=>'index.faq','uses'=>'IndexController@getFaq']);
Route::get('/adhoc', ['as'=>'index.adhoc','uses'=>'IndexController@getAdhoc']);
Route::get('/news', ['as'=>'index.news','uses'=>'IndexController@getNews']);
Route::get('/events', ['as'=>'index.events','uses'=>'IndexController@getEvents']);
Route::get('/gallery', ['as'=>'index.gallery','uses'=>'IndexController@getGallery']);
Route::get('/members', ['as'=>'index.members','uses'=>'IndexController@getMembers']);
Route::get('/contact', ['as'=>'index.contact','uses'=>'IndexController@getContact']);
Route::get('/application', ['as'=>'index.application','uses'=>'IndexController@getApplication']);
Route::get('/member/login', ['as'=>'index.login','uses'=>'IndexController@getLogin']);
Route::get('/member/profile/{id}', ['as'=>'index.profile','uses'=>'IndexController@getProfile']);
// index routes
// index routes

Route::auth();

// dashboard routes
// dashboard routes
Route::resource('users','UserController');
Route::get('/dashboard', ['as'=>'dashboard.index','uses'=>'DashboardController@index']);
// dashboard routes
// dashboard routes
