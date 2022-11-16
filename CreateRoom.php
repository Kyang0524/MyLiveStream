<?php
session_start();

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
                <h1 class="u-text u-text-default u-text-1">Create Room</h1>
              </div>
            </div>
            <div class="u-form u-form-1">
            <p><b style="color: black;"><?php echo $_SESSION['error'];  unset($_SESSION['error']);?><b></p>
            <form action="GetDB.php" method="post" style="padding: 5px;">
                <div class="u-form-group u-form-name u-label-none">
                  <input type="text" placeholder="Enter username to create a room" id="streamusername" name="streamusername" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white" required>
                </div>
                <div class="u-align-center u-form-group u-form-submit u-label-none">
                  <button type="submit" name="CreateRoom" href="GetDB.php" onclick="SetCreateName()" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-custom-color-2 u-radius-50 u-btn-1">Create</button>
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