<?php

namespace App\Http\Controllers;

use App\Models\EducationalGrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class educationalGradeController extends Controller
{


    public function gradeEdit()
    {

        $user = Auth::user();

        $grade = $user->userInfo;

        if($grade){

            return view('dashboard.user.grade.update', compact('grade'));

        }

        return view('dashboard.user.grade.create');

    }

    public function index()
    {
        $user=auth()->user();

        $educationalGarde= $user->educationalGarde;



        //show user info
        return view('dashboard.user.grade.index', compact('educationalGarde'));


    }

    public function create()
    {
        return view('dashboard.user.grade.create');

    }


    public function store(Request $request , EducationalGrade $grade)
    {


        $grade->create([

            'title'=>$request->title,


        ]);
        return redirect()->route('grade.index')->with('success',' !اضافه شد');



    }


    public function show(EducationalGrade $grade)
    {
        //
    }


    public function edit(EducationalGrade $grade)
    {

        $user=auth()->user();

        $grade = $user->userInfo;



        return view('dashboard.user.grade.update',compact('grade'));

    }


    public function update(Request $request, EducationalGrade $grade)
    {


        $user = auth()->user();

        $grade = $user->userInfo;

        $grade->update([

            'title'=>$request->title,


        ]);
        return redirect()->route('grade.index')->with('success',' !اضافه شد');


    }


    public function destroy(EducationalGrade $grade)
    {
        //
    }
}
