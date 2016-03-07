<?php
//PGF-Router
use Clovers\Route\Route;
$router = new Route();
Route::get('/', 'HomeController@index');
Route::get('user', 'UserController@index');
Route::get('user/{id}', 'UserController@show');
Route::post('user/{id}', 'UserController@save');
Route::any('message/send/{user?}', 'MessagesController@send');
$uri = $router->uri();
$method = strtolower($_SERVER['REQUEST_METHOD']);
$dump = $router->match($method, $uri);
var_dump($dump);
//var_dump($router->dump());
