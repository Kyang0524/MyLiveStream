<?php
session_start();

$errors = array(); 

$DATABASE_HOST='20.25.120.191:3306';
$DATABASE_USER='root';
$DATABASE_PASS='123456';
$DATABASE_NAME='users';
// connect to the database
if(isset($_SESSION['username'])):
$username = $_SESSION['username'];
$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
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
endif
?>