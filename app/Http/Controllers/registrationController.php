<?php

namespace App\Http\Controllers;

use App\Models\registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registrationController extends Controller
{
    public function index(){
        $availableMemberID = DB::table('members')->select('memberID')->where('memberID', DB::raw("(select max(`memberID`) from members)"))->get();
        return view('registration',['availableMemberID'=>$availableMemberID]);
    }


    public function store(Request $request){
        $validatedData = $request->validate([
            'memberID' => ['required', 'numeric'],
            'FirstName' => ['required'],
            'LastName' => ['required']
        ]);

        $register = new registration();
        $register->memberID = $request->memberID;
        $register->firstName = $request->FirstName;
        $register->lastName = $request->LastName;
        $register->event = $request->events;
        $register->save();
        return redirect('registration')->with('status', 'Successful');

    }
}
