<!DOCTYPE html>
<html>
    <head>
        <title>Member Registration</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="container" align="middle">
    <div class="card">
        <div class="card-body" style="width: 70rem;" align="middle">
        <form name="questionaire" id="questionaire" method="post" action="{{url('member-form')}}">
        @csrf
        <h5 class="card-title" align="middle">Member Registration</h5>
        <div class="form-row">
            <div class="col">
                <label for="memberID">Member ID</label>
                <input type="number" class="form-control" name="memberID" disabled value="{{ $availableMemberID[0]->memberID + 1}}">
            </div>
            <div class="col">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" name="firstName" placeholder="First name">
            </div>
            <div class="col">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" name="lastName" placeholder="Last name">
            </div>
            <div class="col">
                <label for="age">Last Name</label>
                <input type="number" class="form-control" name="age" placeholder="Age">
            </div>

        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>

        <button type="submit"  class="btn btn-primary">Submit</button>
    </form>
</div>
    </div>
    </div>
    </body>
</html>