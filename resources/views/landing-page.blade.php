<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/homePage.css') }}"  />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/homePageMobile.css') }}"  />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<title>Landing page</title>
</head>
<body>
<style>

    
</style>
<!-- NAVBAR -->
<div class="navbar" id="navbar">
    <div class="left-navbar-side">
        <a href="http://magecode-task">LOGO</a>
    </div>
    <div class="right-navbar-burger">    
        <a class="icon"><img src="../images/hamburgerMenu.png" class="icon" id="menu" onclick="myFunction()"></a>
    </div>
    <div class="right-navbar-side" id="right-navbar">
        <li><a href="http://magecode-task">Home</a></li>
        <li><a href="services">Services</a></li>
        <li><a href="about">About</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="faq">FAQ</a></li>
        
            @if( auth()->check() )
        <li>    
                    <a class="nav-link">Hi {{ auth()->user()->name }}</a>
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

<!-- FIRST-SECTION -->
<div class="section-one">
    <div class="lending-page-info">
        <p id="header-one">DIGITAL</p>
        <p id="header-two">MARKETING</p>
        <p id="text-info">Lorem ipsum dolor sit amet, consectetur adipiscing. 
        Vestibulum rutrum metus at enim congue scelerisque. 
        Sed suscipit metu non iaculis semper consectetur adipiscing elit.</p>
        <a href="digitalmarketing" class="more"><button class="learnMore-button">LEARN MORE</button></a>
    </div>
        
    <div class="lending-page-image">
        <img src="../images/illustration.jpg" id="illustration">
    </div>
</div>

<!-- 
<script>
function showHomePage() {
window.location.href="/";
}
</script>
-->

<!-- NAVBAR OPENER -->
<script>
function myFunction() {
    document.getElementById("right-navbar").classList.toggle("show");
}
</script>

<!-- 
<script>
function openNav() {
    document.getElementById("right-navbar").style.width = "300px";
    document.getElementById("right-navbar").style.position = "relative";
}
</script> -->

</body>
</html>