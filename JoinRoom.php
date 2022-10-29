<?php
session_start();

$DATABASE_HOST='20.25.120.191:3306';
$DATABASE_USER='root';
$DATABASE_PASS='123456';
$DATABASE_NAME='users';
// connect to the database
$errors = array(); 

if(isset($_SESSION['username'])):
$username = $_SESSION['username'];


$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
$query = "SELECT * FROM users WHERE username='$username' ";
$results = mysqli_query($db, $query);
$rowData = $results -> fetch_assoc();

$money = $rowData['money'];

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
          $room = $rowData['roomname'];
          header("location: $room");
        }else {
            array_push($errors, "No have This Room!");
        }
    }
  }

endif
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JoinRoom</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style/JoinRoom.css'>
</head>
<body>
    
    <main id="lobby-container">
        <div id="form-container">
            <div id="form__container__header">
                <p>👋 Input Streamer name to Join a Room</p>
            </div>

            <div id="form__content__wrapper">
                <form action="JoinRoom.php" method="post">
                    <?php include('errors.php');?>
                    <input type="text" name="streamer" required/>
                    <button type="submit" class="submit-btn" name="JoinRoom">Submit</button>
                </form>
            </div>
        </div>
    </main>



</body>