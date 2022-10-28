<?php
// $DATABASE_HOST='20.25.120.191:3306';
// $DATABASE_USER='root';
// $DATABASE_PASS='123456';
// $DATABASE_NAME='users';
// // connect to the database
// $db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// $query = "SELECT * FROM users WHERE username='$username'";
// $results = mysqli_query($db, $query);
// $rowData = $results -> fetch_assoc();

$UID = $_SESSION['UID'];
$money = $_SESSION['money'];

header("location: Room.php?room=$UID");

?>