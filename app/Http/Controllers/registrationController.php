<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
    public function index(){
        return view('registration');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'memberID' => ['required', 'numeric'],
            'FirstName' => ['required'],
            'LastName' => ['required']
        ]);

        $register = new registration();
        $register->memberID = $request->memberID;
        $register->firstName = $request->firstName;
        $register->lastName = $request->lastName;
        $register->event = $request->events;
        $register->save();
        return redirect('registration')->with('status', 'Sucessfull');

    }
}
