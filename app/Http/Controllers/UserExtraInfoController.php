<?php

namespace App\Http\Controllers;

use App\Models\UserExtraInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserExtraInfoController extends Controller
{

    public function index()
    {
        $user=auth()->user();

        $user_extra_info = $user->extra;

        if(!$user_extra_info){
            $user_extra_info = new UserExtraInfo();
        }        return view('dashboard.user.extra.index',compact('user_extra_info'));
    }


    public function create()
    {
        return view('dashboard.user.extra.create');

    }


    public function store(Request $request)
    {
        $data=array();
        $data['user_id'] =Auth::user()->id;

//        $data['brand_name']=$request->brand_name;
        if (UserExtraInfo::insert($data)) {
            Session::flash('create_post', 'مطلب با موفقیت ارسال شد');

            return redirect()->back();
        }

        return redirect()->route('extra.index');



    }


    public function show(UserExtraInfo $user_extra_info)
    {
        //
    }


    public function edit(UserExtraInfo $user_extra_info)
    {
        return view('dashboard.user.extra.update',compact('user_extra_info'));
    }


    public function update(Request $request, UserExtraInfo $user_extra_info)
    {

        $user = auth()->user();

        $user_extra_info = $user->extra;


        $user_extra_info->update([
            'brand_name'=>$request->brand_name,

        ]);
        return redirect()->route('extra.index');


    }


    public function destroy(UserExtraInfo $user_extra_info)
    {
        //
    }
}
