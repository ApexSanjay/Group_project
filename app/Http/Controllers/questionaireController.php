<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionnaire;
use Illuminate\Support\Facades\DB;

class questionaireController extends Controller
{
    public function index(){
        return view('questionaire');
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
