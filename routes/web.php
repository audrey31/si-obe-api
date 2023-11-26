<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix' => 'syllabi'], function () use ($router) {
	$router->get('/', ['uses'=> 'SyllabusController@getAllSyllabus']);
    $router->get('/{id}', ['uses'=> 'SyllabusController@getSyllabusById']);
    $router->post('/create', ['uses'=> 'SyllabusController@store']);
    $router->put('/{id}', ['uses'=> 'SyllabusController@delete']);
    $router->put('/{id}/edit', ['uses'=> 'SyllabusController@update']);
});

$router->group(['prefix' => 'courses'], function () use ($router) {
	$router->get('/', ['uses'=> 'CoursesController@getAllCourses']);
    $router->get('/{id}', ['uses'=> 'CoursesController@getCoursesById']);
    $router->post('/create', ['uses'=> 'CoursesController@store']);
    $router->put('/{id}', ['uses'=> 'CoursesController@delete']);
    $router->put('/{id}/edit', ['uses'=> 'CoursesController@update']);
});