<?php
use Illuminate\Route\Route;
Route::get('/', 'Controller@index');
$controller = new $namespace . '\0' . ucwords($class) . 'Controller';
var_dump(1);
return call_user_func_array([$controller, $name], $request);