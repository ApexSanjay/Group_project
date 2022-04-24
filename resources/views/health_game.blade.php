<!DOCTYPE html>
<html>
    <head>
        <title>Health Game</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/game.css') }}">
    </head>
    <body style="background-color:salmon;">
    @if(session('status'))
    <div class="alert alert-success">
        <p>Your Score is {{ session('status') }} </p>
    </div>
    @endif
        <div class="=container" align="middle">
        <div class="card"  style="width: 70rem; ">
            <div class="card-body">
                <h3 class="card-title">Mental Health Quiz</h3>
                <p class="card-text">Try out our quiz to assess how well you understand Mental Health</p>
                <p style="color:purple; font-size:20px;">Score</p>
                <span class="first">0-30:</span> Little Undertanding of Mental Wellness&nbsp;&nbsp;
                <span class="second">30-50:</span> Has Fundamental Undertanding&nbsp;&nbsp;
                <span class="third">50-100:</span> Professor of Mental Wellness&nbsp;&nbsp;
                <hr class="solid">
                <form name="questionaire" id="questionaire" method="get" action="{{ url('game-form') }}">
                    <label for="firstQ">What is the definition of Mental Health?</label>
                    <select class="custom-select" name="firstQ">
                            <option value="20">Being mentally well means that your mind is in order and functioning in your best interest</option>
                            <option value="0">Mental health is a temporary feeling, it goes away</option>
                            <option value="0">It is an illogical way of thinking</option>
                    </select>
                    </br></br>
                    <label for"secondQ">Do Children experience mental health problems?</label>
                    <select class="custom-select" name="secondQ">
                            <option value="20">Yes, Young children may show early warning signs of mental health concerns.</option>
                            <option value="0">No, Children don't experience mental health problems.</option>
                            <option value="0">No idea</option>
                    </select>
                    </br></br>
                    <label for"thirdQ">Are people with Mental health problems violent and unpredictable?</label>
                    <select class="custom-select" name="thirdQ">
                            <option value="0">Yes, their aim is to inflict harm on to others</option>
                            <option value="0">Yes, mentally ill people are dangerous</option>
                            <option value="20">No, majority of people with mental health problems are no more likely to be violent than anyone else. </option>
                    </select>
                    </br></br>
                    <label for"fourthQ">Does personality weakness or character flaws cause mental health problems?</label>
                    <select class="custom-select" name="fourthQ">
                            <option value="20">No, Mental health problems have nothing to do with being lazy or weak and many people need help to get better</option>
                            <option value="0">Yes, mentally ill people are dangerous</option>
                            <option value="0">Yes, our mental health comes from personality and feelings </option>
                    </select>
                    </br></br>
                    <label for"fifthQ">Therapy and self-help are a waste of time. Why bother when you can just take a pill?</label>
                    <select class="custom-select" name="fifthQ">
                            <option value="20">No, treatment for mental health problems varies depending on the individual and could include medication, therapy, or both</option>
                            <option value="0">Yes, any medication can heal mental illness</option>
                            <option value="0">Yes, therapy only works for children</option>
                    </select>
                    </br></br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
</div>
        </div>

    </body>
</html>