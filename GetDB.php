<?php
// $DATABASE_HOST='20.25.120.191:3306';
// $DATABASE_USER='root';
// $DATABASE_PASS='123456';
// $DATABASE_NAME='users';
// // connect to the database
// $db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

$_SESSION['UID'] = $UID;
header("location: Room.html?room=$UID");

?>