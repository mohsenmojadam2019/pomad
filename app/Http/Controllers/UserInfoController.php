<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserInfoController extends Controller
{


    public function userInfoEdit()
    {

        $user = Auth::user();

        $user_info = $user->userInfo;

        if($user_info){

            return view('dashboard.user.user-info.update', compact('user_info'));

        }

        return view('dashboard.user.user-info.create');

    }

    public function index()
    {
        $user=auth()->user();

        $user_info = $user->userInfo;



        //show user info
        return view('dashboard.user.user-info.index', compact('user_info'));


    }

    public function create()
    {
        return view('dashboard.user.user-info.create');

    }


    public function store(Request $request ,UserInfo $user_info)
    {


        $user_info->create([
            'user_id' => auth()->user()->id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'gender'=>$request->gender,
            'birth_date'=>$request->birth_date,


        ]);
        return redirect()->route('user-info.index')->with('success',' !اضافه شد');



    }


    public function show(UserInfo $user_info)
    {
        //
    }


    public function edit(UserInfo $user_info)
    {

        $user=auth()->user();

        $user_info = $user->userInfo;



        return view('dashboard.user.user-info.update',compact('user_info'));

    }


    public function update(Request $request, UserInfo $user_info)
    {


        $user = auth()->user();

        $user_info = $user->userInfo;

        $user_info->update([
            'user_id' => auth()->user()->id,

            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'gender'=>$request->gender,
            'birth_date'=>$request->birth_date,


        ]);
        return redirect()->route('user-info.index')->with('success',' !اضافه شد');


    }


    public function destroy(UserInfo $user_info)
    {
        //
    }
}
