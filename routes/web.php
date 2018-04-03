<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('register/verify/{token}','Auth\RegisterController@verify');

Route::get('/home', 'HomeController@index');
Route::get('/board', 'HomeController@board');
Route::get('/memberslist', 'HomeController@memberslist');
Route::get('/president', 'HomeController@president');
Route::get('/legislative', 'HomeController@legislative');
Route::get('/strategic_plan', 'HomeController@strategic_plan');
Route::get('/key_priorities', 'HomeController@key_priorities');

Route::get('/districts', 'HomeController@districts');
Route::get('/district_ohio_valley', 'HomeController@district_ohio_valley');
Route::get('/district_twin_lakes', 'HomeController@district_twin_lakes');
Route::get('/district_blue_grass', 'HomeController@district_blue_grass');
Route::get('/district_cumberland', 'HomeController@district_cumberland');

Route::get('/bylaws_committee', 'HomeController@bylaws_committee');
Route::get('/legislative_committee', 'HomeController@legislative_committee');
Route::get('/membership_committee', 'HomeController@membership_committee');
Route::get('/programs_committee', 'HomeController@programs_committee');
Route::get('/scholarship_committee', 'HomeController@scholarship_committee');

Route::get('/contact', 'HomeController@contact');

Route::get('/legal', 'HomeController@legal');
Route::get('/privacy', 'HomeController@privacy');
Route::get('/sitemap', 'HomeController@sitemap');

Route::get('/user_subscription', 'HomeController@user_subscription');

Route::get('/classify_user', 'HomeController@classify_user');

Route::get('/activate', 'HomeController@activate');

Route::get('/resendemail', 'HomeController@resendemail');
