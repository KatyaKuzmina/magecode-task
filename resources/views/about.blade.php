<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ URL::asset('css/additionalPages.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/additionalPagesMobile.css') }}"  />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<title>Landing page</title>
</head>
<body>
<style>

    
</style>
<!-- NAVBAR -->
<div class="navbar">
    <div class="left-navbar-side">
        <a href="http://magecode-task">LOGO</a>
    </div>
<div class="right-navbar-burger">    
        <a class="icon"><img src="../images/hamburgerMenu.png" class="icon" id="menu" onclick="myFunction()"></a>
    </div>
    <div class="right-navbar-side" id="right-navbar">
        <li><a href="http://magecode-task">Home</a></li>
        <li><a href="services">Services</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="faq">FAQ</a></li>
            @if( auth()->check() )
        <li>    
                    <a class="greeting">Hi {{ auth()->user()->name }}</a>
        </li>
        <li>
            <a href="logout"><input class="signUp-button" type="button" value="LOG OUT"></a>
        </li>
            @else
        <li>
            <a href="register"><input class="signUp-button" type="button" value="SIGN UP"></a>
        </li>    
            @endif
    </div>
</div>

<div class="section-one">
    <p id="heading-one">About us</p>
</div>

<div class="section-two">
    <p id="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<script>
function myFunction() {
    document.getElementById("right-navbar").classList.toggle("show");
}
</script>



</body>
</html>