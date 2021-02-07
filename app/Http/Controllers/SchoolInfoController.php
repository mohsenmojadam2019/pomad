<?php

namespace App\Http\Controllers;

use App\Models\SchoolInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SchoolInfoController extends Controller
{


    public function userSchoolInfoEdit()
    {

        $user = Auth::user();

        $school_info = $user->schoolInfo;

        if($school_info){

            return view('dashboard.user.school-info.update', compact('school_info'));

        }

        return view('dashboard.user.school-info.create');

    }


    public function index()
    {
        $user=auth()->user();

        $school_info = $user->schoolInfo;

        return view('dashboard.user.school-info.index',compact('school_info'));
    }


    public function create()
    {
        return view('dashboard.user.school-info.create');

    }


    public function store(Request $request,SchoolInfo $school_info)
    {

//        dd( $school_info);


        $school_info->create([
            'user_id' => auth()->user()->id,

            'school_9'=>$request->school_9,
            'school_10'=>$request->school_10,
            'school_11'=>$request->school_11,
            'school_12'=>$request->school_12

        ]);
        return redirect()->route('user-school-info.index')->with('success','اضافه شد');

    }


    public function show(SchoolInfo $school_info)
    {
        //
    }


    public function edit(SchoolInfo $school_info)
    {
        $user=auth()->user();

        $school_info = $user->userInfo;

        return view('dashboard.user.school-info.update',compact('school_info'));

    }


    public function update(Request $request, SchoolInfo $school_info)
    {


        $user = auth()->user();

        $school_info = $user->schoolInfo;

        $school_info->update([
            'user_id' => auth()->user()->id,

            'school_9'=>$request->school_9,
            'school_10'=>$request->school_10,
            'school_11'=>$request->school_11,
            'school_12'=>$request->school_12

        ]);
        return redirect()->route('user-school-info.index')->with('success','اضافه شد');

    }


    public function destroy(SchoolInfo $school_info)
    {
        //
    }
}
