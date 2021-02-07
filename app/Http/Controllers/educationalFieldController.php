<?php

namespace App\Http\Controllers;


use App\Models\educationalField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class educationalFieldController extends Controller
{

    public function educationalFieldEdit(){

        $user = Auth::user();

        $educational_field = $user->userEducationalInfo->EducationalField;

        if($educational_field){

            return view('dashboard.user.educational-field.update', compact('educational_field'));

        }

        return view('dashboard.user.educational-field.create');

    }




    public function index()
    {
        $user=auth()->user();

        $educational_field = $user->userEducationalInfo->EducationalField;

        return view('dashboard.user.educational-field.index',compact('educational_field'));
    }


    public function create()
    {
        return view('dashboard.user.educational-field.create');

    }


    public function store(Request $request, educationalField $educational_field)
    {


           $educational_field->create([

               'title'=>$request->title,

           ]);
        return redirect()->route('educational-field.index')->with('success','اضافه شد');




    }

    public function show(educationalField $educational_field)
    {
        //
    }


    public function edit(educationalField $educational_field)
    {

        $user=auth()->user();

        $educational_field = $user->EducationalField;


        return view('dashboard.user.educational-field.update',compact('educational_field'));
    }


    public function update(Request $request, educationalField $educational_field)
    {


        $educational_field->update([

            'title'=>$request->title,

        ]);
        return redirect()->route('educational-field.index')->with('success','اضافه شد');


    }


    public function destroy(educationalField $educational_field)
    {
        //
    }
}
