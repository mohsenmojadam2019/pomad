<?php

namespace App\Http\Controllers;

class NoroozController extends Controller
{
    public function index()
    {

        return view('dashboard.user.norooz.index');
    }

//گزارش
    public function report()
    {
        return view('dashboard.user.norooz.user.report.index');
    }

    //رفع اشکال
    public function Debugging()
    {
        return view('dashboard.user.norooz.user.debugging.index');

    }

    //برنامه غذایی
    public function diet()
    {
        return view('dashboard.user.norooz.user.diet.index');
    }
    public function dietWeekOne()
    {
        return view('dashboard.user.norooz.user.diet.week-one');
    }
    public function dietWeekTwo()
    {
        return view('dashboard.user.norooz.user.diet.week-two');
    }




    //زنگ تفریح
    public function breakTime()
    {
        return view('dashboard.user.norooz.user.break-time.index');
    }

    public function listVideo()
    {
        return view('dashboard.user.norooz.user.break-time.list-video');
    }

    public function listText()
    {
        return view('dashboard.user.norooz.user.break-time.list-text');
    }

    public function title()
    {
        return view('dashboard.user.norooz.user.break-time.title');
    }




//آزمون
    public function azmoon()
    {
        return view('dashboard.user.norooz.user.azmoon.index');
    }

    public function test()
    {
        return view('dashboard.user.norooz.user.azmoon.test');
    }




//ورزش
    public function sport()
    {
        return view('dashboard.user.norooz.user.sport.index');
    }

    public function show()
    {
        return view('dashboard.user.norooz.user.sport.show');
    }

//کارگاه
    public function workshop()
    {
        return view('dashboard.user.norooz.user.workshop.index');
    }

    public function iframe()
    {
        return view('dashboard.user.norooz.user.workshop.iframe');
    }




//نوتیفیکیشن
    public function notification()
    {
        return view('dashboard.user.norooz.user.notification.notification');
    }


}
