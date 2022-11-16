<?php 
session_start();
?>
<?php include('DBInfo.php')?>
<?php

$errors = array(); 

if(isset($_SESSION['username'])):
$username = $_SESSION['username'];
$streamername = $_POST['streamer'];


$query = "SELECT * FROM users WHERE username='$username' ";
$results = mysqli_query($db, $query);
$rowData = $results -> fetch_assoc();
$money = $rowData['money'];

if($username == $streamername){
    array_push($errors, "You are this room live broadcaster!");
}else{
if (isset($_POST['JoinRoom'])) {
    $streamer = mysqli_real_escape_string($db, $_POST['streamer']);
  
    if (empty($streamer)) {
        array_push($errors, "StreamerName is required");
    }
    if (count($errors) == 0) {
        $query = "SELECT * FROM room WHERE streamername='$streamer' ";
        $results = mysqli_query($db, $query);
        $rowData = $results -> fetch_assoc();
        if (mysqli_num_rows($results) == 1) {
          $RoomID = $rowData['RoomID'];
          $_SESSION['streamer_name']=$streamer;
          header("location: ClientRoom.php?room=$RoomID");
        }else {
            array_push($errors, "No have This Room!");
        }
    }
  }
}

endif
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>

    <title>CreateRoomtest</title>
    <link rel="stylesheet" href="style/nicepage.css" media="screen">
    <link rel="stylesheet" href="style/CreateRoom.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

</head>
  <body class="u-body u-xl-mode" data-lang="en">
    <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-7a32">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-custom-color-1 u-expanded-width-xs u-group u-radius-50 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-container-style u-custom-color-1 u-expanded-width u-group u-shape-round u-top-left-radius-50 u-top-right-radius-50 u-group-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h1 class="u-text u-text-default u-text-1">Join LiveStream🔍</h1>
              </div>
            </div>
            <div class="u-form u-form-1">

            <form action="JoinRoom.php" method="post" style="padding: 5px;">
            <?php include('errors.php');?>
                <div class="u-form-group u-form-name u-label-none">
                  <input type="text" placeholder="Enter the username of the live broadcaster to enter the room" id="streamer" name="streamer" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white" required>
                </div>
                <div class="u-align-center u-form-group u-form-submit u-label-none">
                  <button type="submit" name="JoinRoom" onclick="getRoom()" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-custom-color-2 u-radius-50 u-btn-1">Submit</button>
                </div>
              </form>
            </div>
            <a href="Home.php" class="u-border-hover-palette-1-base u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-2 u-radius-50 u-btn-2">Back<br>
            </a>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="js/room_rtc.js"></script>
</body>