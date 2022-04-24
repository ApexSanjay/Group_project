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
        $memberFName=DB::table('members')->select('firstName')->where('memberID', '=', $request->memberID)->get();
        $memberLName=DB::table('members')->select('lastName')->where('memberID', '=', $request->memberID)->get();
        $duplicateEvent=DB::table('registration')->select('event')->where('memberID', '=', $request->memberID)->get();

        $validatedData = $request->validate([
            'memberID' => ['required', 'numeric'],
            'FirstName' => ['required'],
            'LastName' => ['required']
        ]);

        if ($request->FirstName != $memberFName){
            $message="Invalid first name or last name and Same activity cannot be selected by the same member";
            return redirect('registration')->with('message', $message);
        }

        $register = new registration();
        $register->memberID = $request->memberID;
        $register->firstName = $request->FirstName;
        $register->lastName = $request->LastName;
        $register->event = $request->events;
        $register->save();
        return redirect('registration')->with('status', 'Sucessfull');

    }
}
