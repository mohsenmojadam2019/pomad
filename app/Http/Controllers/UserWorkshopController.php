<?php

namespace App\Http\Controllers;

use App\Models\UserWorkshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserWorkshopController extends Controller
{




    public function userWorkshopReserve(Request $request , UserWorkshop $userWorkshop)
    {
        $userWorkshop->create([
            'user_id' => Auth::user()->id,
            'workshop_id' => $request->workshop_id,
            'has_reserved' => '1'
        ]);
        return redirect()->back();


    }

}
