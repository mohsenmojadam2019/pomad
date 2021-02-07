<?php

namespace App\Http\Controllers;


use App\Definition\ContactNumberInput;
use App\Http\Middleware\Authenticate;
use App\Models\ContactNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ContactNumberController extends Controller
{

    public function index()
    {
        $user = auth()->user();

        $contactNumber = $user->contactNumber;

        return view('dashboard.user.contact-number.index', compact('contactNumber'));
    }


    public function create()
    {
        return view('dashboard.user.contact-number.create');

    }


    public function store(Request $request, ContactNumber $contactNumber)
    {

        $numbers = $request->except('_token');

        $user = Auth::user();
        foreach ($numbers as $key => $number){

           $id = $this->getNumberTypeIdFromKey($key);
            $dataToInsert = [
                'user_id'   =>  $user->id,
                'number_type_id'    =>  $id,
                'number'  =>  $number
            ];

            ContactNumber::create($dataToInsert);
        }

        return redirect()->route('user-contact-number.index');

    }

    public function show(ContactNumber $contactNumber)
    {
        //
    }


    public function edit(ContactNumber $contactNumber)
    {
        return view('dashboard.user.contact-number.update', compact('contactNumber'));
    }


    public function update(Request $request, ContactNumber $contactNumber)
    {

        $user = auth()->user();

        $contactNumber = $user->contactNumber;

        $contactNumber->update([
            'user_id' => auth()->user()->id,
            'number_type_id' => $request->type_number,

            'number' => $request->number,

        ]);
        return redirect()->route('user-contact-number.index')->with('success','اضافه شد');


    }


    public function destroy(ContactNumber $contactNumber)
    {
        //
    }

    private function getNumberTypeIdFromKey(string $key="father_number")
    {

        $typeText = ContactNumberInput::getContactInfoInputNames()[$key];

        $numberType = NumberType::where(['name' => $typeText])->first();

        return $numberType->id;


    }
}
