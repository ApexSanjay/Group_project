<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gameController extends Controller
{
    public function index(){
        return view('health_game');
    }

    public function mark(Request $request){
        $first=$request->firstQ;
        $second=$request->secondQ;
        $third=$request->thirdQ;
        $fourth=$request->fourthQ;
        $fifth=$request->fifthQ;
        $sum=$first+$second+$third+$fourth+$fifth;
        return redirect('health_game')->with('status', $sum);
    }
}
