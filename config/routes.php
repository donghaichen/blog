<?php
/**
 * Created by PhpStorm.
 * User: donghai
 * Date: 16/2/17
 * Time: 下午10:04
 */
use NoahBuscher\Macaw\Macaw;
Macaw::get('/fuck', 'HomeController@home');
Macaw::dispatch();