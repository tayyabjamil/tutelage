<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

  $router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('getProfile',  ['uses' => 'ProfilesController@showAllProfile']);
  $router->post('createProfile',  ['uses' => 'ProfilesController@create']);
  $router->get('queries',  ['uses' => 'QueryController@showAllQuery']);
  $router->get('ratings',  ['uses' => 'RatingsController@showAllRating']);
  $router->get('login',  ['uses' => 'LoginController@login']);

  //Route::delete('studentsdel/{id}', 'StudentsController@delete');
  // $router->post('students', ['uses' => 'StudentsController@create']);
  // $router->delete('students/{id}', ['uses' => 'StudentsController@delete']);
  // $router->put('students/{id}', ['uses' => 'StudentsController@update']);
  
});