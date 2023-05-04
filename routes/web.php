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

$router->get('/', ['middleware' => 'apiCount', 'as' => 'home', 'uses' => "HomeController@home"]);

$router->get('/works', ['as' => 'works', 'uses' => "HomeController@allRepos"]);
$router->get('/works/{id}', ['as' => 'work', 'uses' => "HomeController@showRepo"]);

$router->get('/resume', ['as' => 'resume', 'uses' => "HomeController@resume"]);

$router->post('/change-local', ['as' => 'change-local', 'uses' => "HomeController@changeLocal"]);