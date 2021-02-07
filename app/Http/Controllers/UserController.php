<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
//    user-profile




    public function index()
    {

        $user_profile = auth()->user();

//        $user_profile = [
//            ''
//        ];


//        if(!$user_profile){
//            $educationGroup = new user();
//
//
//        }

        return view('dashboard.user.user.index',compact('user_profile'));
    }


    public function create()
    {
        return view('dashboard.user.user.create');

    }


    public function store(Request $request,User $user_profile)
    {


        $user_profile->create(request([
            'username'=>$request->username,
            'password'=>$request->password,
            'email'=>$request->email,
            'national_code'=>$request->national_code,


        ]));

        if(Auth::user()->isPrimaryInfoPresent()){

        }

        return back()->with('success','اضافه شد !');

    }

    public function show(User $user)
    {
        //
    }


    public function edit(User $user_profile)
    {

        return view('dashboard.user.user.update',compact('user_profile'));
    }


    public function update(Request $request, User $user_profile)
    {

        $user_profile->update([

            'username'=>$request->username,
            'password'=>$request->password,
            'email'=>$request->email,
            'national_code'=>$request->national_code,


        ]);




        return redirect()->route('user-profile.index')->with('success',' !اضافه شد');


    }


    public function destroy(User $user)
    {
        //
    }

}
