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

$router->group(['prefix' => 'tutelage'], function () use ($router) {
  $router->get('students',  ['uses' => 'StudentsController@showAllStudents']);

  $router->get('students/{id}', ['uses' => 'StudentsController@showOneStudent']);

  $router->post('students', ['uses' => 'StudentsController@create']);

  $router->delete('students/{id}', ['uses' => 'StudentsController@delete']);

  $router->put('students/{id}', ['uses' => 'StudentsController@update']);
  $router->get('queries',  ['uses' => 'QueryController@showAllQuery']);

});