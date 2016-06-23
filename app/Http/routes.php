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

Route::get('/', 'PortfolioController@index');
Route::get('about', 'PortfolioController@about');
Route::get('/dev.travisueki.com/contact', 'PortfolioController@contact');
Route::get('blog', 'PortfolioController@blog_list');
Route::get('/blog/{post_id}', 'PortfolioController@blog_post');
