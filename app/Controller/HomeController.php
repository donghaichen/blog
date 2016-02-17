<?php

/**
 * Created by PhpStorm.
 * User: donghai
 * Date: 16/2/17
 * Time: 下午10:13
 */
class HomeController extends BaseController
{
    public function index()
    {
        $users = User::find(2);
        $users = User::all();
        $user = new User;
        $user->username = 'someone';
        $user->email = 'some@overtrue.me';
        $user->save();

    }

}