<?php
session_start();
include('DBInfo.php');
$errors = array(); 


if(isset($_POST['streamusername'])):
$streamusername = $_POST['streamusername'];
$username = $_SESSION['username'];

if($streamusername != $username){
    $_SESSION['error'] = "You are not this room streamer!";
    header("location: CreateRoom.php");
}

if($streamusername == $username){
$query = "SELECT * FROM users WHERE username='$username' ";
$results = mysqli_query($db, $query);
$rowData = $results -> fetch_assoc();

$UID = $rowData['UID'];
$money = $rowData['money'];
$room = "ClientRoom.php?room=$UID";
$Inputquery = "INSERT INTO room (roomID,roomname , streamername) SELECT * FROM(SELECT '$UID','$room','$username')AS tmp WHERE NOT EXISTS(SELECT streamername FROM room WHERE streamername = $username)LIMIT 1";
mysqli_query($db,$Inputquery);

$_SESSION['RoomID'] = $UID;

header("location: StreamerRoom.php?room=$UID");
}



endif
?>