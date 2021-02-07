<?php

namespace App\Http\Controllers;

use App\Models\EducationalField;
use App\Models\DiplomaField;
use App\Models\UserEducationalInfo;
use App\Models\EducationalGrade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserEducationalInfoController extends Controller
{

    public function userEducationEdit(){


        $user_education_info = auth()->user()->userEducationInfo;
        $educationalGrade = EducationalGrade::all();
        $educationalField = EducationalField::all();
        $userDiplomaField = DiplomaField::all();

        if($user_education_info){

            return view('dashboard.user.educational.update', compact('user_education_info','$userDiplomaField','educationalField','educationalGrade'));

        }



        return view('dashboard.user.educational.create', compact('user_education_info','userDiplomaField','educationalField','educationalGrade'));

    }



    public function index()
    {


        $user_education_info = Auth::user()->userEducationalInfo;
        $educationalGrade=$user_education_info->educationalGrade;

        $educationalField=$user_education_info->educationalField;
        $userDiplomaField=$user_education_info->UserDiplomaField;



        return view('dashboard.user.educational.index', compact('user_education_info','userDiplomaField','educationalField','educationalGrade'));
    }


    public function create()
    {
        return view('dashboard.user.educational.create');

    }


    public function store(Request $request , UserEducationalInfo $user_education_info)
    {
        $user_education_info->create([
            'user_id'=>Auth::user()->id,
            'educational_grade_id' => $request->educational_grade_id,
           'average_Written_diplom' => $request->average_Written_diplom,
            'educational_field_id' => $request->educational_field_id,
            'diploma_field_id' => $request->diploma_field_id,

            'end_education' => $request->end_education,
            'academic_year' => $request->academic_year,
            'get_license_year' => $request->get_license_year,
           'is_special'=>1

        ]);
        return redirect()->route('user-educational.index')->with('success','اضافه شد');


    }


    public function show(UserEducationalInfo $user_education_info)
    {
        //
    }


    public function edit(UserEducationalInfo $user_education_info)
    {

        $user = auth()->user();

        $user_education_info = $user->userEducationInfo;


        return view('dashboard.user.educational.update', compact('user_education_info'));
    }


    public function update(Request $request, UserEducationalInfo $user_education_info)
    {
        $user = auth()->user();

        $user_education_info = $user->userEducationInfo;

//        if (!$educational) {
//            $educational = new educational();
//        }


        $user_education_info->update([
            'user_id'=>Auth::user()->id,

            'educational_grade_id' => $request->educational_grade_id,

            'average_Written_diplom' => $request->average_Written_diplom,
            'user_educational_field_id' => $request->user_educational_field_id,
            'diploma_field_id' => $request->diploma_field_id,
            'end_education' => $request->end_education,
            'academic_year' => $request->academic_year,
            'get_license_year' => $request->get_license_year,


        ]);
        return redirect()->route('user-educational.index')->with('success','اضافه شد');


    }

    public function destroy(UserEducationalInfo $user_education_info)
    {
        //
    }
}
