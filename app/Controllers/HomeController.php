<?php
namespace App\Controllers;
use Clovers\Session\Session;
use Clovers\Session\Storage\File;

class HomeController extends BaseController
{
    public function index()
    {
//        $users = User::find(2);
//        $users = User::all();
//        $user = new User;
//        $user->username = 'someone';
//        $user->email = 'some@overtrue.me';
//        $user->save();
        $session = new Session(new File(CACHE_PATH . '/session000'));
        $session->set("age","100");
        $name = $session->get('age');
        var_dump($name);
    }

}