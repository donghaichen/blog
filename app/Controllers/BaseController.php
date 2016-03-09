<?php
namespace App\Controllers;
class BaseController
{
    public function __construct()
    {
    }
    public function httpNotFound()
    {
        header('HTTP/1.0 404 Not Found');
        var_dump('Im 404 not found');
    }

}