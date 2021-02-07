<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\SpecialStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
 public function index(){
     $mentors=SpecialStudent::all();
     return view('dashboard.user.consultant-reports.record-violations',compact('mentors'));
 }
//ارزشیابی
 public function assessment()
 {
     $mentors=SpecialStudent::all();

     return view('dashboard.user.consultant-reports.assessment', compact('mentors'));


 }

 public function store(Request $request)
 {

     assessment::create($request->all());

 }


}
