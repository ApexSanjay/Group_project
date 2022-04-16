<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;

class registrationController extends Controller
{
    public function index(){
        return view('registration');
    }

    public function store(Request $request){
        $register = new registration();
        $register->memberID = $request->memberID;
        $register->firstName = $request->FirstName;
        $register->lastName = $request->LastName;
        $register->event = $request->events;
        $register->save();
        return redirect('registration')->with('status', 'Sucessfull');
    }
}
