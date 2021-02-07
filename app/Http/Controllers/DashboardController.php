<?php

namespace App\Http\Controllers;

use App\Models\educationalGroup;
use App\Models\User;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('dashboard.layouts.app');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');

    }

    public function userDashboard()
    {
        $user = Auth::user();

        return view('dashboard.user.profile');
    }



    public function onlineWorkshop()
    {
        $user = Auth::user();

        return view('dashboard.user.online-workshop.index');
    }
//    service
    public function servicePublic()
    {
        $user = Auth::user();

        return view('dashboard.user.service-public.index');
    }

    public function servicePrivate()
    {
        $user = Auth::user();

        return view('dashboard.user.service-private.index');
    }
    public function workShopReservenById()
    {

    }

}
