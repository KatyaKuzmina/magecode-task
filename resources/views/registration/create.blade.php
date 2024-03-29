<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/registrationForm.css') }}"  />
<title></title>
</head>
<body>

    <form method="POST" action="/register" class="form">
        {{ csrf_field() }}
        <div class="form-group">
            <h2 class="heading">Registration</h2>
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">

        <div class="form-button">
            <button style="cursor:pointer" type="submit" class="submitBtn">Submit</button>
        </div>
    @include('partials.formerrors')
    </form>
        <div class="buttons">
            <div class="cancel-button">
                <label for="cancel">Get back </label>
                <a class="nav-link" href="http://magecode-task" id="cancel">Back</a>
            </div>
        </div>
</body>
</html>