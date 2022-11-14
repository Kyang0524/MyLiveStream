<?php
session_start();
?>

<?php 
include('DBInfo.php');

$sql2 = "SELECT * from room";
$result = $db -> query($sql2);
if (!$result) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
if (mysqli_num_rows($result) > 0) {
    // 输出数据
    $room = array();
    $user = array();
    while($row = mysqli_fetch_assoc($result)) {
        $roomname = $row["roomname"];
        $roomuser = $row["streamername"];
        array_push($room,$roomname);
        array_push($user,$roomuser);

    }

    if($user[0] == null){
        $_SESSION['user1'] ="No live broadcaster";
        $_SESSION['room1'] = "";
    }else{
        $_SESSION['user1'] = $user[0];
        $_SESSION['room1'] = $room[0];
        
    }

    if($user[1] == null){
        $_SESSION['user2'] ="No live broadcaster";
        $_SESSION['room2'] = "";
    }else{
        $_SESSION['user2'] = $user[1];
        $_SESSION['room2'] = $room[1];
    }

    if($user[2] == null){
        $_SESSION['user3'] ="No live broadcaster";
        $_SESSION['room3'] = "";
    }else{
        $_SESSION['user3'] = $user[2];
        $_SESSION['room3'] = $room[2];
    }

    if($user[3] == null){
        $_SESSION['user4'] ="No live broadcaster";
        $_SESSION['room4'] = "";
    }else{
        $_SESSION['user4'] =$user[3];
        $_SESSION['room4'] = $room[3];
    }

    if($user[4] == null){
        $_SESSION['user5'] ="No live broadcaster";
        $_SESSION['room5'] = "";
    }else{
        $_SESSION['user5'] =$user[4];
        $_SESSION['room5'] = $room[4];
    }

} else {
    $_SESSION['user1']  ="No live broadcaster";
    $_SESSION['room1'] = "";
    $_SESSION['user2']  ="No live broadcaster";
    $_SESSION['room2'] = "";
    $_SESSION['user3']  ="No live broadcaster";
    $_SESSION['room3'] = "";
    $_SESSION['user4']  ="No live broadcaster";
    $_SESSION['room4'] = "";
    $_SESSION['user5']  ="No live broadcaster";
    $_SESSION['room5'] = "";
}
?>