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
  $router->post('getUserProfile',  ['uses' => 'ProfilesController@getUserProfile']);
  $router->post('createProfile',  ['uses' => 'ProfilesController@create']);
  $router->post('createQueries',  ['uses' => 'QueryController@create']);
  $router->get('getUserQueries',  ['uses' => 'QueryController@getUserQueries']);
  $router->get('getPeopleQueries',  ['uses' => 'QueryController@getPeopleQueries']);
  
  $router->get('ratings',  ['uses' => 'RatingsController@showAllRating']);
  $router->post('login',  ['uses' => 'LoginController@login']);
  
  //Route::delete('studentsdel/{id}', 'StudentsController@delete');
  // $router->post('students', ['uses' => 'StudentsController@create']);
  // $router->delete('students/{id}', ['uses' => 'StudentsController@delete']);
  // $router->put('students/{id}', ['uses' => 'StudentsController@update']);
  
});