<?php

namespace App\Http\Controllers;

use App\Models\SpecialStudent;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectMentorController extends Controller
{

    public function create()
    {
        $special=SpecialStudent::all();

        return view('dashboard.user.mentor.selected-mentor', compact('special'));
    }


    public function store(Request $request)
    {
//type_hidden
        $userId = $request->get('id');

        $mentorId = $request->get('mentor_id');

        //$specialStudent = User::find($userId)->specialStudent;

        $specialStudent = SpecialStudent::where(['user_id' => $userId])->first();


        $specialStudent->mentor_id = $mentorId;
        $specialStudent->save();

        //TODO Add Event for changing mentor
        return back();

    }



//    todo searchNotMentor
    public function searchNotMentor(){
        {

            $specials=SpecialStudent::all();

            return view('dashboard.user.not-reserved.not-consultant', compact('specials'));
        }
    }




}
