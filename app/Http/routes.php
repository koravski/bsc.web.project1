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

//Route::get('test','WelcomeController@getName');
// Route::get('home','HomeController@getIndex');
//Route::get('auth','Auth\AuthController@getIndex');
//Route::get('user','UserController@getIndex');
// Route::get('/','WelcomeController@getIndex');

//Route::get('/', ['uses'=>'HomeController@getIndex', 'as'=>'home'] );

Route::post('cards/imageByID', 'WelcomeController@postImageByID');
Route::post('auth/testEmail', 'Auth\AuthController@postTestEmail');
Route::get('game/{gameId}', 'GameController@getPlayers');
Route::post('games', 'GamesListController@createGame');


Route::controllers
([
	'auth'	=>	'Auth\AuthController',
	'user'	=>	'UserController','home'	=>	'HomeController',
	'games' =>	'GamesListController',
	'/'     => 	'WelcomeController',
        
 ]);

