<?php
session_start();

$errors = array(); 

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
          <form action="GetDB.php" method="post">
            <?php include('errors.php');?>
            <input type="text" name="username" id="username" placeholder="Room Name" required />
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
