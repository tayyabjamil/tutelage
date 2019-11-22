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

$router->group(['prefix' => 'api'], function () use ($router) {

$router->post('createProfile',  ['uses' => 'ProfilesController@createProfile']);
$router->post('createCourses',  ['uses' => 'CoursesController@createCourses']);
$router->post('createBiddings',  ['uses' => 'BiddingsController@createBiddings']);
$router->post('createQuery',  ['uses' => 'QueryController@createQuery']);
$router->post('login',  ['uses' => 'LoginController@login']);


$router->get('getProfile',  ['uses' => 'ProfilesController@showAllProfile']);
$router->get('getUserProfile',  ['uses' => 'ProfilesController@getUserProfile']);

$router->get('getPeopleQueries',  ['uses' => 'QueryController@getPeopleQueries']);
$router->get('getUserQueries',  ['uses' => 'QueryController@getUserQueries']);

$router->get('getBiddingProfiles',  ['uses' => 'BiddingsController@getBiddingsProfiles']);
$router->get('getBiddingResponces',  ['uses' => 'BiddingsController@getBiddingsResponces']);
$router->get('getUserCourses',  ['uses' => 'CoursesController@getUserCourses']);


});