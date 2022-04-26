<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
.box {
    width:600px;
    margin:0 auto;
    border: 2px solid #ccc;
}

</style>
</head>
<body>
<br />

<div class="container box">
    <h3 align="center">Admin Login</h3>

    @if(isset(Auth::user()->user))
        <script>window.location="/main/admin";</script>
    @endif

    @if ($message= Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
    @endif

    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
        </ul>
        </div>
    @endif
    <!--Login Form -->
    <form method="get" action="{{url('admin-form')}}">
        {{csrf_field()}}
        <div class="form-group">
            <label>Enter Username</label>
            <input type="text" name="user" class="form-control">
        </div>

        <div class="form-group">
            <label>Enter Password</label>
            <input type="password" name="pass" class="form-control">
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="login">
        </div>
        </form>
</body>
</html>