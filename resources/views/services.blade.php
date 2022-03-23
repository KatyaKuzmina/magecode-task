<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ URL::asset('css/servicesPage.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/additionalPagesMobile.css') }}"  />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<title>Landing page</title>
</head>
<body>
<style>

    
</style>
<!-- NAVBAR -->
<div class="navbar">
    <div class="left-navbar-side" id="myTopnav">
        <a href="http://magecode-task">LOGO</a>
    </div>
    <div class="right-navbar-burger">    
        <a class="icon"><img src="../images/hamburgerMenu.png" class="icon" id="menu" onclick="myFunction()"></a>
    </div>
    <div class="right-navbar-side" id="right-navbar">
        <li><a href="http://magecode-task">Home</a></li>
        <li><a href="about">About</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="faq">FAQ</a></li>
        <li><a><input class="signUp-button" type="button" value="SIGN UP" onclick="showHomePage()"></a></li>
    </div>
</div>

<div class="section-one">
    <div class="heading-one">
        <p id="heading-one">Our services</p>
        <p id="heading-one">Our services</p>
    </div>
    <div class="description">
        <div class="description">
            <p>Our services</p>
        </div>
        <div class="description">
            <p>Our services</p>
        </div>
    </div>
</div>


<script>
function myFunction() {
  document.getElementById("right-navbar").classList.toggle("show");
}
</script>
<!-- 
    <img src="../images/services.jpg" id="services-image">
<script>
function showHomePage() {
window.location.href="/";
}
</script>
-->


</body>
</html>