<?php session_start();
        if(!isset($_SESSION['username'])){
        $_SESSION['msg']="You must log in first";
        header("location:Login.php");
        }
        
        if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header("location: Login.php");

        }
        
        if($_SESSION['permission']== 1){
          header("location: Admin.php");
        }
?>
<?php 
include('DBInfo.php');
include('Getroom.php');

?>
<?php

        $currentname = $_SESSION['username'];
        $query = "SELECT * FROM users WHERE username='$currentname' ";
        $results = mysqli_query($db, $query);
        $rowData = $results -> fetch_assoc();
        if (mysqli_num_rows($results) == 1) {
        $_SESSION['money'] = $rowData['money'];
        }


?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Register">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="style/nicepage.css" media="screen">
<link rel="stylesheet" href="style/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <script type="text/javascript" src="js/room_rtc.js"></script>
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
    <script type="text/javascript" src="js/jquery.js"></script>
  </head>
  <header>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-black u-clearfix u-header u-header" id="sec-1ce5"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-white u-text-1">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1" href="Home.php">LiveStream </a>
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
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
<!--
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="Login.php" style="padding: 10px 2px;">LogIn</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="Register.php" style="padding: 10px 2px;">Register</a>
-->
          <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" style="padding: 10px 2px;">Contact</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" style="padding: 10px 2px;">Feedback</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="CreateRoom.php"  style="padding: 10px 0px 10px 2px;" >CreateRoom</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="JoinRoom.php"  style="padding: 10px 0px 10px 2px;" >JoinRoom</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
<!--
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Register.php">Register</a>
-->
<li class="u-nav-item"><a class="u-button-style u-nav-link">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link">Feedback</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="CreateRoom.php" >CreateRoom</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="JoinRoom.php">JoinRoom</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a class="u-enable-responsive u-image u-logo u-image-1" data-image-width="1200" data-image-height="844">
          <img src="images/1200px-YouTube_Diamond_Play_Button.svg.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-clearfix u-grey-15 u-section-1" id="sec-d2f7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-layout-horizontal u-list u-list-1">
          <a class="u-flip-vertical u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-video u-video-contain" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" >
              <div class="u-background-video u-expanded" style="">
                <div class="embed-responsive embed-responsive-1">

                  <img id="room1"src="images/loading.gif" width="100%" height="100%">
                  <div style="text-align: center; margin:60px; color:black; background-image: url(../images/shownamebackground.jpg); background-size:100% 100%;border-radius:10px;font-family: 'Lobster', cursive; "><?php echo $_SESSION['user1']?></div>
                  <script> if(<?php echo $_SESSION['user1']!= "No live broadcaster"?>){$('#room1').fadeOut('fast');}</script>
                  
                </div>
              </div>
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                <form action="<?php echo $_SESSION['room1'];?>" method="POST">
                <button onclick="getroom1()"class="u-border-none u-btn u-btn-round u-button-style u-gradient u-none u-radius-50 u-btn-1"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </form>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-video u-video-contain" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-background-video u-expanded" style="">
                <div class="embed-responsive embed-responsive-2">

                <img id="room2" src="images/loading.gif" width="100%" height="100%">
                <div style="text-align: center; margin:60px; color:black; background-image: url(../images/shownamebackground.jpg); background-size:100% 100%;border-radius:10px;font-family: 'Lobster', cursive; "><?php echo $_SESSION['user2']?></div>
                <script> if(<?php echo $_SESSION['user2'] != "No live broadcaster"?>){$('#room2').fadeOut('fast');}</script>
                
                </div>
              </div>
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-2">
                <form action="<?php echo $_SESSION['room2'];?>" method="POST">
                <button onclick="getroom2()"class="u-border-none u-btn u-btn-round u-button-style u-gradient u-none u-radius-50 u-btn-2"> &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </form>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-video u-video-contain" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-background-video u-expanded" style="">
                <div class="embed-responsive embed-responsive-3">
               
                <img id="room3"src="images/loading.gif" width="100%" height="100%">  
                <div style="text-align: center; margin:60px; color:black; background-image: url(../images/shownamebackground.jpg); background-size:100% 100%;border-radius:10px;font-family: 'Lobster', cursive; "><?php echo $_SESSION['user3']?></div>
                <script> if(<?php echo $_SESSION['user3'] != "No live broadcaster"?>){$('#room3').fadeOut('fast');}</script>              
                  
                </div>
              </div>
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-3">
                <form action="<?php echo $_SESSION['room3'];?>" method="POST">
                <button onclick="getroom3()" class="u-border-none u-btn u-btn-round u-button-style u-gradient u-none u-radius-50 u-btn-3"> &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </form>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-video u-video-contain" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-background-video u-expanded" style="">
                <div class="embed-responsive embed-responsive-4">

                <img id="room4"src="images/loading.gif" width="100%" height="100%">  
                <div style="text-align: center; margin:60px; color:black; background-image: url(../images/shownamebackground.jpg); background-size:100% 100%;border-radius:10px;font-family: 'Lobster', cursive; "><?php echo $_SESSION['user4']?></div>                
                <script> if(<?php echo $_SESSION['user4'] != "No live broadcaster"?>){$('#room4').fadeOut('fast');}</script>            

                </div>
              </div>
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-4">
                <form action="<?php echo $_SESSION['room4'];?>" method="POST">
                <button onclick="getroom4()" class="u-border-none u-btn u-btn-round u-button-style u-gradient u-none u-radius-50 u-btn-4"> &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </form>
              </div>
            </div>
            <div class="u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-video u-video-contain" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
              <div class="u-background-video u-expanded" style="">
                <div class="embed-responsive embed-responsive-5">

                <img id="room5" src="images/loading.gif" width="100%" height="100%">
                <div style="text-align: center; margin:60px; color:black; background-image: url(../images/shownamebackground.jpg); background-size:100% 100%;border-radius:10px;font-family: 'Lobster', cursive; "><?php echo $_SESSION['user5']?></div>
                <script> if(<?php echo $_SESSION['user5'] != "No live broadcaster"?>){$('#room5').fadeOut('fast');}</script>

                </div>
              </div>
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-5">
                <form action="<?php echo $_SESSION['room5'];?>" method="POST">
                <button onclick="getroom5()" class="u-border-none u-btn u-btn-round u-button-style u-gradient u-none u-radius-50 u-btn-5"> &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="bevel"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </form>
              </div>
            </div>
          </div>
          <a class="u-flip-vertical u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-25 u-section-2" id="sec-3488">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">LiveStream_Group4 </h2>
        <a href="#" class="u-border-none u-btn u-btn-round u-button-style u-grey-80 u-hover-white u-radius-30 u-btn-1">Button</a>
      </div>
    </section>
    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #000000 !important
}</style>
    
    
<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-58e8"><div class="u-clearfix u-sheet u-sheet-1">
    <p class="u-small-text u-text u-text-variant u-text-1"><b id='currentname'></b><br>
     $<b id='currentmoney'></b></p>
    <p> <a href="Login.php?logout='1'" style="color:red;">logout</a> </p>
</div>
<script>
   currentname.innerHTML = sessionStorage.getItem('display_name');
   sessionStorage.setItem('currentmoney',<?php echo $_SESSION['money']?>);
   currentmoney.innerHTML = sessionStorage.getItem('currentmoney');
</script>
</footer>
<?php 
$room1 = $_SESSION['user1'];
$room2 = $_SESSION['user2'];
$room3 = $_SESSION['user3'];
$room4 = $_SESSION['user4'];
$room5 = $_SESSION['user5'];
?>
<script>
var room11 = "<?php echo $room1?>"
var room22 = "<?php echo $room2?>"
var room33 = "<?php echo $room3?>"
var room44 = "<?php echo $room4?>"
var room55 = "<?php echo $room5?>"
function getroom1(){
 sessionStorage.setItem("streamer_name",room11) 
}
function getroom2(){
  sessionStorage.setItem("streamer_name",room22)
}
function getroom3(){
  sessionStorage.setItem("streamer_name",room33)
}
function getroom4(){
  sessionStorage.setItem("streamer_name",room44)
}
function getroom5(){
  sessionStorage.setItem("streamer_name",room55)
}
</script>
  
</body></html>
