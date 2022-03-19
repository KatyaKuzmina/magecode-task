<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ URL::asset('css/homePage.css') }}" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<title>Landing page</title>
</head>
<body>
<style>

    
</style>
<!-- NAVBAR -->
<div class="navbar">
    <div class="left-navbar-side">
        <a href="">LOGO</a>
    </div>
    <div class="right-navbar-side">
        <a href="">Home</a>
        <a href="services">Services</a>
        <a href="about">About</a>
        <a href="contact">Contact</a>
        <a href="faq">FAQ</a>
        <input class="signUp-button" type="button" value="SIGN UP" onclick="showHomePage()">
    </div>
</div>

<div class="section-one">
    <div class="lending-page-info">
        <p id="header-one">DIGITAL</p>
        <p id="header-two">MARKETING</p>
        <p id="text-info">Lorem ipsum dolor sit amet, consectetur adipiscing. 
        Vestibulum rutrum metus at enim congue scelerisque. 
        Sed suscipit metu non iaculis semper consectetur adipiscing elit.</p>
        <input class="learnMore-button" type="button" value="LEARN MORE" onclick="learnMorePage()">
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


</body>
</html>