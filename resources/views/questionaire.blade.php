<!DOCTYPE html>
<html>
    <head>
        <title>Questionaire</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/survey.css') }}">
    </head>
    <body>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="container mt-5">
    <div class="card">
        <div class="card-body">
        <form name="questionaire" id="questionaire" method="post" action="{{url('questionaire-form')}}">
        @csrf
        <h5 class="card-title" align="middle">Questionaire</h5>
        <div class="form-row">
            <div class="col">
                <label for="memberID">Member ID</label>
                <input type="number" class="form-control" name="memberID" placeholder="Member ID">
            </div>
            <div class="col">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" name="firstName" placeholder="First name">
            </div>
            <div class="col">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" name="lastName" placeholder="Last name">
            </div>
        </div>
        <div class="form-group">
            <label for="selectEvent">Please select the Courses or Services you participated</label>
            <select class="form-control" name="selectEvent" id="selectEvent">
            <optgroup label="Courses">
                    <option value="Laughter Yoga">Laughing Yoga</option>
                    <option value="Healthy Cooking">Healthy Cooking</option>
                    <option value="Mental Wellness">Mental Wellness</option>
                </optgroup>
                <optgroup label="Services">
                    <option value="Education">Education</option>
                    <option value="Volunteering">Volunteering</option>
                </optgroup>
            </select>
        </div>
        <!--Instructor rating-->
        <label for="range">How would you rate our instructor?</label>
        </br>
        <p style="float:left;"> 0 </p>
        <p style="float:right;"> 5 </p>
        <input type="range" class="custom-range" name="instructorRating" min="0" max="5" id="range">

        <!--Activities rating-->
        <label for="range">How would you rate our activities?</label>
        </br>
        <p style="float:left;"> 0 </p>
        <p style="float:right;"> 5 </p>
        <input type="range" class="custom-range" name="activityRating" min="0" max="5" id="range2">
        </div>

        <label for="comeAgain" style="margin-left:1.9%;">Will you join our future activities? </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="yes" style="margin-left:2.1%;">
            <label class="form-check-label" for="inlineRadio1">Yes</label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="no" style="margin-left:2.1%;">
            <label class="form-check-label" for="inlineRadio2">No</label>
        </div>

        <div class="form-group">
            </br>
            <label for="feedback" style="margin-left:1.9%;">Additional feedback</label>
            <textarea class="form-control" id="feedback" name="feedback" maxlength="150" rows="2" placeholder="Maximum 500 words"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    </div>
    </div>
    </body>
</html>