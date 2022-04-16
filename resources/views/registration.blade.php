<!DOCTYPE html>
<html>
    <!--Thapa Sanjay -->
    <!--Registration Form-->
<head>
    <title>Registration</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Registration Form
    </div>
    <div class="card-body">
      <form name="main-form" id="main-form" method="post" action="{{url('store-form')}}">
       @csrf
       <div class="form-group">
            <label for="memberID">Member ID</label>
            <input type="number" id="memberID" name="memberID" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="FirstName">First Name</label>
          <input type="text" id="FirstName" name="FirstName" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="LastName">Last Name</label>
          <input type="text" id="LastName" name="LastName" class="form-control" required="">
        </div>
        <div class="form-group">
            <label for="events">Event</label>
            <select name="events" id="events">
                <optgroup label="Courses">
                    <option value="Laughing Yoga">Laughing Yoga</option>
                    <option value="Healthy Cooking">Healthy Cooking</option>
                    <option value="Mental Wellness">Mental Wellness</option>
                </optgroup>
                <optgroup label="Services">
                    <option value="Counselling">Counselling</option>
                    <option value="psychology emergency">psychology emergency</option>
                </optgroup>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
<!--Thapa Sanjay -->
