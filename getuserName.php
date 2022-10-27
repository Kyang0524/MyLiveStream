<?php
$mysqli = new mysqli("servername","username","password","database");
if($mysqli->connect_error){
    exit('Could not connect')
}

$sql = "SELECT username FROM users2 WHERE username = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name);
$stmt->fetch();
$stmt->close();

?>