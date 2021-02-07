<?php

namespace App\Http\Controllers;

use App\Models\SpecialStudent;
use Illuminate\Http\Request;

class UserRecordController extends Controller
{
    public function recordUsers()
    {
        $specials=SpecialStudent::all();

        return view('dashboard.user.not-reserved.user-records', compact('specials'));
    }
}
