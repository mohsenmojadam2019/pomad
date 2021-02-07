<?php

namespace App\Http\Controllers;

use App\Models\consultant_meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TestController extends Controller
{

    public function index()
    {
//        $dt = Carbon::now();


        return view('dashboard.a');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(consultant_meeting $consultant_meeting)
    {
        //
    }


    public function edit(consultant_meeting $consultant_meeting)
    {
        //
    }


    public function update(Request $request, consultant_meeting $consultant_meeting)
    {
        //
    }


    public function destroy(consultant_meeting $consultant_meeting)
    {
        //
    }
}
