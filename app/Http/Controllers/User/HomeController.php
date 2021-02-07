<?php


namespace App\Http\Controllers\User;


class HomeController
{

    public function index()
    {


        //data for user homepage

        //notice


        //user_info


        return view('dashboard.user.home', ['notices'   =>  [], 'user_info' => []]);

    }

}