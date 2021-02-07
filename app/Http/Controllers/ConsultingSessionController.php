<?php

namespace App\Http\Controllers;

use App\Models\ConsultingSession;
use App\Models\SpecialStudent;
use Carbon\Carbon;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class ConsultingSessionController extends Controller
{

    public function index()
    {
        $specials = SpecialStudent::all();

        return view('dashboard.user.consulting-session.index',compact('specials'));

    }

    public function store(Request $request)
    {


        $id = $request->get('id');

        $delay = $request->get('delay');
        $contact = $request->get('contact');

        $end_date =Carbon::now()->addMinutes(60);

        $end_time = Carbon::now()->addDays(7);

        $consultingSession = ConsultingSession::where(['id' => $id])->first();


        $consultingSession->delay = $delay;
        $consultingSession->contact = $contact;
        $consultingSession->end_date = $end_date;
        $consultingSession->end_time = $end_time;

        $consultingSession->save();
        return back();

    }


}
