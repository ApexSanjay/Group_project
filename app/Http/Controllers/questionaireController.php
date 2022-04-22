<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionaire;

class questionaireController extends Controller
{
    public function index(){
        return view('questionaire');
    }

    public function store(Request $request){
        $question = new questionaire ();
        $question->memberID = $request->memberID;
        $question->firstName = $request->firstName;
        $question->lastName = $request->lastName;
        $question->activity = $request->selectEvent;
        $question->instructorRating = $request->instructorRating;
        $question->activityRating = $request->activityRating;
        $question->futureActivityParticipation = $request->inlineRadioOptions;
        $question->feedback = $request->feedback;
        $question->save();
        return redirect('questionaire')->with('status', 'Sucessfull');
    }
}
