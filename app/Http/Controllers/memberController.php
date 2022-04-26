<?php

namespace App\Http\Controllers;
use App\Models\memberRegister;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class memberController extends Controller
{
    public function index(){
    $availableMemberID = DB::table('members')->select('memberID')->where('memberID', DB::raw("(select max(`memberID`) from members)"))->get();
    return view('member',['availableMemberID'=>$availableMemberID]);
    }

    public function memberRegister(Request $request){
        $availableMemberID = DB::table('members')->select('memberID')->where('memberID', DB::raw("(select max(`memberID`) from members)"))->get();
        
        $register = new memberRegister();
        $register->memberID = $availableMemberID[0]->memberID + 1;
        $register->firstName = $request->firstName;
        $register->lastName = $request->lastName;
        $register->age = $request->age;
        $register->email = $request->email;
        $register->save();
        return redirect('member')->with('status', 'Sucessfull');
    }

}

