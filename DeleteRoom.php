<?php
include('DBInfo.php');

$streamername = isset($_POST['streamername']) ? $_POST['streamername'] : '';
$query = "DELETE FROM room WHERE streamername = '$streamername';";
mysqli_query($db, $query);
?>