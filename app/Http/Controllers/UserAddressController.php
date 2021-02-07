<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class UserAddressController extends Controller
{
    public function UserAddressEdit()
    {
        $user=Auth::user();
        $user_address=$user->UserAddress;
        if ($user_address){
            return view('dashboard.user.address.update',compact('user_address'));
        }
        return view('dashboard.user.address.create');
    }

    public function index()
    {

        $user=auth()->user();

        $user_address = $user->UserAddress;


        return view('dashboard.user.address.index', compact('user_address'));

    }


    public function create()
    {
        return view('dashboard.user.address.create');
    }


    public function store(Request $request, UserAddress $user_address )
    {

        $user_address->create([
            'user_id'=>auth()->user()->id,
            'province'=>$request->province,
            'address'=>$request->address,
            'city'=>$request->city,
//            'lat'=>$request->lat,
//            'long'=>$request->long,
            'postal_code'=>$request->postal_code
        ]);
            return redirect()->route('user-address.index')->with('success','اضافه شد');
    }

    public function show(UserAddress $user_address)
    {
        //
    }


    public function edit(UserAddress $user_address)
    {
        $user=auth()->user();
        $user_address=$user->userAddress;
        return view('dashboard.user.address.update', compact('user_address'));
    }


    public function update(Request $request, UserAddress $user_address)
    {

        $user = auth()->user();

        $user_address = $user->userAddress;


        $user_address->update([
            'user_id' => auth()->user()->id,

            'province' => $request->province,
            'city' => $request->city,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
        ]);
        return redirect()->route('user-address.index')->with('success','اضافه شد');
    }


    public function destroy(UserAddress $user_address)
    {
        //
    }
}
