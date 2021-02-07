<?php

namespace App\Http\Controllers;


use App\Models\educationalGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class educationalGroupController extends Controller
{

    public function index()
    {
        $user=auth()->user();

        $educational_group = $user->specialStudent->educationalGroup;


        return view('dashboard.user.educational-group.index',compact('educational_group'));
    }

    public function editEducationalGroup()
    {
        $user=auth()->user();

        $educational_group = $user->specialStudent->educationalGroup;
        if($educational_group){

            return view('dashboard.user.educational-group.update',compact('educational_group'));
        }
        return view('dashboard.user.educational-group.create');

    }


    public function create()
    {
        return view('dashboard.user.educational-group.create');

    }


    public function store(Request $request, educationalGroup $educational_group)
    {
        $educational_group->create([

            'name'=>$request->name,
            'year'=>$request->year,
            'group'=>$request->group,

        ]);
        return redirect()->route('educational-group.index')->with('success','اضافه شد');


    }

    public function show(educationalGroup $educationGroup)
    {
        //
    }


    public function edit(educationalGroup $educational_group)
    {
        $user=auth()->user();
        $educational_group->users()->educationalGroup;
        return view('dashboard.user.educational-group.update',compact('educational_group'));
    }


    public function update(Request $request, educationalGroup $educational_group)
    {

        $educational_group->update([

            'name'=>$request->name,
            'year'=>$request->year,
            'group'=>$request->group,

        ]);
        return redirect()->route('educational-group.index')->with('success','اضافه شد');


    }


    public function destroy(educationalGroup $educational_group)
    {
        //
    }
}
