<?php include('LoginAndRegister.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Register">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="style/nicepage.css" media="screen">
    <link rel="stylesheet" href="style/Hometest.css" media="screen">
    <link rel="stylesheet" href="style/LoginAndRegister.css">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/1200px-YouTube_Diamond_Play_Button.svg.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-black u-clearfix u-header u-header" id="sec-1ce5"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-white u-text-1">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1" href="Home.html">LiveStream </a>
        </p>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="#" style="padding: 4px 6px; font-size: calc(1em + 8px);">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1f0e"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-1f0e" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="Home.html" style="padding: 10px 2px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="Login.php" style="padding: 10px 2px;">LogIn</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="Register.php" style="padding: 10px 2px;">Register</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" style="padding: 10px 2px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" style="padding: 10px 2px;">Feedback</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="Room.html" style="padding: 10px 0px 10px 2px;">CreateRoom</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Register.php">Register</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Feedback</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Room.html">CreateRoom</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="https://nicepage.me" class="u-enable-responsive u-image u-logo u-image-1" data-image-width="1200" data-image-height="844">
          <img src="images/1200px-YouTube_Diamond_Play_Button.svg.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
<div class="container">
<div class="card">
<div class="inner-box" id="card">
<div class="card-front">
  <h2>Register</h2>
       <form action="Register.php" method="post">
         <?php include('errors.php');?>
         <input type="text" class="input-box" placeholder="UserName" id="username" name="username" >
         <input type="email" class="input-box" placeholder="Email" id="email" name="email" >
         <input type="password" class="input-box" placeholder="Password" id="password_1" name="password_1" >
         <input type="password" class="input-box" placeholder="Comfirm Password" id="password_2" name="password_2" >
         <button type="submit" class="submit-btn" name="reg_user">Submit</button>
         
       </form>
     <button type="button" class="btn" onclick="backpage()">I've an account</button>                              
  </div>
<div class="card-back">
 
       <h2>LOGIN</h2>
       <form action="Register.php" method="post">
         <?php include('errors.php');?>
         <input type="text" class="input-box" placeholder="UserName" name="username" id="username" required >
         <input type="password" class="input-box" placeholder="Password" name="password" required>
         <button type="submit" class="submit-btn" name="login_user" onclick="saveData()">Submit</button>
         <input type="checkbox"><span>Remember Me</span>
       </form>
  <button type="button" class="btn" onclick="frontpage()">I'm New User</button>
  <a href="">Forgot Password</a>  
</div> 
</div>
</div>
</div>
</body>


<script type="text/javascript" src="js/LoginAndRegister.js"></script>
<script type="text/javascript" src="js/nicepage.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</html>