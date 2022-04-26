<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionnaire;
use Illuminate\Support\Facades\DB;

class questionaireController extends Controller
{
    public function index(){
        $availableMemberID = DB::table('members')->select('memberID')->where('memberID', DB::raw("(select max(`memberID`) from members)"))->get();
        return view('questionaire',['availableMemberID'=>$availableMemberID]);
    }



    public function store(Request $request){
        $question = new questionnaire();
        $question->memberID = $request->memberID;
        $question->firstName = $request->firstName;
        $question->lastName = $request->lastName;
        $question->activity = $request->selectEvent;
        $question->instructorRating = $request->instructorRating;
        $question->activityRating = $request->activityRating;
        $question->futureParticipation = $request->inlineRadioOptions;
        $question->feedback = $request->feedback;
        $question->save();
        return redirect('questionaire')->with('status', 'Sucessfully inserted to Database');
    }
}
