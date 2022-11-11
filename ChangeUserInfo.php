<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/nicepage.css" media="screen">
<link rel='stylesheet' type='text/css' media='screen' href='style/showDB.css'>
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <!-- <script type="text/javascript" src="js/room_rtc.js"></script> -->
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    

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
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="Admin.php" style="padding: 10px 2px;">Home</a>
<!--
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="Login.php" style="padding: 10px 2px;">LogIn</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="Register.php" style="padding: 10px 2px;">Register</a>
-->
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="CreateRoom.php"  style="padding: 10px 0px 10px 2px;" >CreateRoom</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-white u-text-body-alt-color u-text-hover-palette-4-light-1" href="JoinRoom.php"  style="padding: 10px 0px 10px 2px;" >JoinRoom</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Admin.php">Home</a>
<!--
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Register.php">Register</a>
-->
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
    
    
    
</head>
    <body>
<form action="ChangeUserInfo.php" method="post">
    <input type="text" id="searchname" name="searchname" placeholder="Check User">
    <button type="submit" name="Get_user">Go</button>
</form>   
<table>
<tr>
                <th>UID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Money</th>
            </tr>

<?php 
include('DBInfo.php');
if(isset($_POST['Get_user'])){
    $searchUser = mysqli_real_escape_string($db,$_POST['searchname']);

    $sql = "SELECT * from users WHERE username='$searchUser' ";
    $result = $db -> query($sql);

    if($result -> num_rows >0){
      while($row = $result -> fetch_assoc()){
          echo "<tr><td>". $row["UID"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["money"] . "</td></tr>" ;
      }
      echo "</table>";
  }
  else{
      echo "No This User!";
  }
  $db ->close();

}
?>

<form action="ChangeUserInfo.php" method="post">
    <br><input type="text" id="searchname" name="searchname" placeholder="Input Username">
    <input type="text" id="money" name="money" placeholder="topup money">
    <button type="submit" name="Change_user_Info">Go</button>
</form> 
<?php 
include('DBInfo.php');
if(isset($_POST['Change_user_Info'])){
    $searchUser = mysqli_real_escape_string($db,$_POST['searchname']);
    $money = mysqli_real_escape_string($db,$_POST['money']);

    $sql = "SELECT * from users WHERE username='$searchUser' ";
    $results = mysqli_query($db, $sql);
    $rowData = $results -> fetch_assoc();
    if(mysqli_num_rows($results)==1){
      $newmoney = $rowData['money'] + $money;
      $query2 = "UPDATE users SET money='$newmoney' WHERE username='$searchUser' ";
      mysqli_query($db, $query2);
    }

    $sql2 = "SELECT * from users WHERE username='$searchUser' ";
    $result = $db -> query($sql2);
    if($result -> num_rows >0){
      while($row = $result -> fetch_assoc()){
          echo "<tr><td>". $row["UID"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["money"] . "</td></tr>" ;
      }
      echo "</table>";
  }
  else{
      echo $oldmoney;
  }
  $db ->close();

}

?>
</body>

</html>