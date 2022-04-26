<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function index(){
        $staffs=DB::table('staff')->get();
        $members=DB::table('members')->get();
        $activities=DB::table('activities')
        ->join('staff','staff.staffID', '=','activities.staffID')
        ->select('activities.activityID','activities.eventName','staff.firstName','staff.lastName','activities.numberOfParticipants','activities.seatsAvailable')
        ->get();
        $registrations=DB::table('registration')->get();
        $questionaires=DB::table('Questionnaire')->get();
        return view('admin',[ 'staffs'=> $staffs, 'members'=>$members, 'activities'=>$activities, 'registrations'=>$registrations, 'questionaires'=>$questionaires]);
    }

    public function redirect(Request $request){
        $user=$request->user;
        $pass=$request->pass;

        $this->validate($request,[
            'user' => 'required|alphaNum',
            'pass' => 'required|alphaNum'
        ]);

        if ($user=='admin' and $pass='pass'){
            return redirect('admin');
        }

    }
    public function logout(){
        return view('home');
    }
}
