<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <script src="js/create_room_background_1.js"></script>
    <script src="js/create_room_background_2.js"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CreateRoom</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style/JoinRoom.css'>
</head>
<body>
    <main id="lobby-container">
      <div id="form-container">
        <div id="form__container__header">
          <p><b>Create Room<b></p>
        </div>
        <div id="form__content__wrapper">
          <p><b style="color: black;"><?php echo $_SESSION['error'];  unset($_SESSION['error']);?><b></p>
          <form action="GetDB.php" method="post">
            <input type="text" name="streamusername" id="streamusername" placeholder="Enter username to create a room" required />
            <button type="submit" class="submit-btn" name="CreateRoom" onclick="SetCreateName()">Create</button>
          </form>
          </br>
          <a href="Home.php">
            <button id="back_btn">Back</button>
          </a>
        </div>
      </div>
    </main>
  
    <script type="text/javascript" src="js/room_rtc.js"></script>
  </body>
