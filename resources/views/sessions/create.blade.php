<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/registrationForm.css') }}"  />
<title></title>
</head>
<body>    
    <form method="POST" action="/login" class="form">
        {{ csrf_field() }}

        <div class="form-group">
            <h2 class="heading">Log In</h2>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-button">
            <button style="cursor:pointer" type="submit" class="submitBtn">Login</button>
        </div>
        @include('partials.formerrors')
    </form>
    <div class="buttons">
            <div class="login-button">
                <label for="login">Do not have an account </label>
                <a class="nav-link" href="/register" id="login">Sign Up</a>
            </div>
            <div class="cancel-button">
                <label for="cancel">Get back </label>
                <a class="nav-link" href="http://magecode-task" id="cancel">Cancel</a>
            </div>
        </div>

</body>
</html>