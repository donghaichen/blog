<?php
//PGF-Router
use Illuminate\Route\Route;
$router = new Route();
Route::get('/', 'HomeController@index');
Route::get('/user/', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
Route::post('/user/{id}', 'UserController@save');
Route::any('/message/send/{user?}', 'MessagesController@send');

$router->addRoute('any', '/message/send/{user?}', 'MessagesController@send');
$dump = $router->findRoute('post', '/message/send/John');
var_dump($dump);
