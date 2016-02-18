<?php
/**
 * Created by PhpStorm.
 * User: donghai
 * Date: 16/2/17
 * Time: 下午10:02
 */
// Autoload 自动载入
define('APP_PATH', __DIR__);
define('CONF_PATH', __DIR__ . '/config');
//设置时间区
date_default_timezone_set("PRC");

require APP_PATH . '/vendor/autoload.php';
require APP_PATH . '/config/routes.php';
use Illuminate\Database\Capsule\Manager as DB;//如果你不喜欢这个名称，as DB;就好 
$database = require CONF_PATH . '/database.php';
$db = new DB;
$db->addConnection($database);
$db->setAsGlobal();
$db->bootEloquent();