<?php 
$DATABASE_HOST='127.0.0.1:3306';
$DATABASE_USER='ky';
$DATABASE_PASS='123456';
$DATABASE_NAME='users';
// connect to the database
$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if( $db -> connect_error){
  die("Connection failed:" . $db -> connect_error);
  
}
$createuserstable = 'CREATE TABLE IF NOT EXISTS users (
  `UID` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `money` INT NULL,
  `permission` INT NULL,
  PRIMARY KEY (`username`));';
  mysqli_query($db,$createuserstable);

$createroomtable = 'CREATE TABLE IF NOT EXISTS room (
    `RoomID` VARCHAR(45) NOT NULL,
    `roomname` VARCHAR(45) NOT NULL,
    `streamername` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`streamername`));';
    mysqli_query($db,$createroomtable);

?>