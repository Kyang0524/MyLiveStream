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
?>