<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    <div class="=container" align="middle" style="background-color:lightblue;">
</br>
        <div class="card"  style="width: 70rem;" name="staffTable" style="background-color:whitesmoke;">
        <h5 class="card-title" align="middle">Staff Table</h5>
            <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Staff ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($staffs as $staff)
                <tr>
                <th scope="row">{{ $staff->staffID; }}</th>
                <td>{{ $staff->firstName; }}</td>
                <td>{{ $staff->lastName }}</td>
                <td>{{ $staff->email }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
</br></br>
        <div class="card"  style="width: 70rem;" name="memberTable" style="background-color:whitesmoke;">
        <h5 class="card-title" align="middle">Member Table</h5>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Member ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($members as $member)
                <tr>
                <th scope="row">{{ $member->memberID; }}</th>
                <td>{{ $member->firstName; }}</td>
                <td>{{ $member->lastName }}</td>
                <td>{{ $member->age }}</td>
                <td>{{ $member->email }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
</br></br>
<div class="card"  style="width: 70rem;" name="activityTable" style="background-color:whitesmoke;"> 
        <h5 class="card-title" align="middle">Activity Table</h5>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Activity ID</th>
                    <th scope="col">Activity Name</th>
                    <th scope="col">Staff First Name</th>
                    <th scope="col">Staff Last Name</th>
                    <th scope="col">Number of Participants</th>
                    <th scope="col">Seats Available</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($activities as $activity)
                <tr>
                <th scope="row">{{ $activity->activityID; }}</th>
                <td>{{ $activity->eventName }}</td>
                <td>{{ $activity->firstName }}</td>
                <td>{{ $activity->lastName }}</td>
                <td>{{ $activity->numberOfParticipants }}</td>
                <td>{{ $activity->seatsAvailable }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </br></br>

        <div class="card"  style="width: 70rem;" name="registrationTable" style="background-color:whitesmoke;">
        <h5 class="card-title" align="middle">Registrations Table</h5>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Registration ID</th>
                    <th scope="col">Activity Name</th>
                    <th scope="col">Member ID</th>
                    <th scope="col">Member First Name</th>
                    <th scope="col">Member Last Name</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($registrations as $registration)
                <tr>
                <th scope="row">{{ $registration->registrationID; }}</th>
                <td>{{ $registration->event }}</td>
                <td>{{ $registration->memberID }}</td>
                <td>{{ $registration->firstName }}</td>
                <td>{{ $registration->lastName }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
</br></br>

<div class="card"  style="width: 70rem;" name="questionaireTable" style="background-color:whitesmoke;">
        <h5 class="card-title" align="middle">Questionnaire Responses</h5>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Questionnaire ID</th>
                    <th scope="col">Member ID</th>
                    <th scope="col">Member First Name</th>
                    <th scope="col">Member Last Name</th>
                    <th scope="col">Activity</th>
                    <th scope="col">Instructor Rating</th>
                    <th scope="col">Activity Rating</th>
                    <th scope="col">Future Participation</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($questionaires as $questionaire)
                <tr>
                <th scope="row">{{ $questionaire->questionnaireID }}</th>
                <td>{{ $questionaire->memberID }}</td>
                <td>{{ $questionaire->firstName }}</td>
                <td>{{ $questionaire->lastName }}</td>
                <td>{{ $questionaire->activity }}</td>
                <td>{{ $questionaire->instructorRating }}</td>
                <td>{{ $questionaire->activityRating }}</td>
                <td>{{ $questionaire->futureParticipation }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
</br></br>

<div class="card"  style="width: 70rem;" name="feedbacksTable" style="background-color:whitesmoke;">
        <h5 class="card-title" align="middle">Additonal Feedback</h5>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">Questionaire ID</th>
                    <th scope="col">Additional Feedback</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($questionaires as $questionaire)
                <tr>
                <th scope="row">{{ $questionaire->questionnaireID }}</th>
                <td>{{ $questionaire->feedback }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>



    </div>
    </body>
</html>