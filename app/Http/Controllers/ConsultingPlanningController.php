<?php

namespace App\Http\Controllers;

use App\Models\ConsultingPlanning;
use App\Models\SpecialStudent;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ConsultingPlanningController extends Controller
{
    public function index()
    {
        $specials = SpecialStudent::all();
        return view('dashboard.user.consulting-planning.index', compact('specials'));


    }

    public function store(Request $request)
    {

        //type_hidden
        $id = $request->get('id');


        $delay = $request->get('delay');
        $contact = $request->get('contact');
        $start_date = $request->get('start_date');
        $start_time = $request->get('start_time');
        $end_date = Carbon::now()->addMinutes(60);
        $end_time = Carbon::now()->addDays(7);



        $consultingPlanning = ConsultingPlanning::where(['id' => $id])->first();

        $consultingPlanning->delay = $delay;
        $consultingPlanning->contact = $contact;
        $consultingPlanning->end_date = $end_date;
        $consultingPlanning->end_time = $end_time;
        $consultingPlanning->start_date = $start_date;
        $consultingPlanning->start_time = $start_time;
        $consultingPlanning->save();

        //TODO Add Event for changing mentor
        return back();


    }


}
