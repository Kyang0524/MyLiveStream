<?php
        include('DBInfo.php');

        $clientmoney = isset($_POST['clientmoney']) ? $_POST['clientmoney'] : '';
        $clientname  = isset($_POST['clientname']) ? $_POST['clientname'] : '' ;
        $streamername= isset($_POST['streamername']) ? $_POST['streamername'] : '';

        $query = "UPDATE users SET money='$clientmoney' WHERE username='$clientname' ";
        mysqli_query($db, $query);



        $query2 = "SELECT money,username FROM users WHERE username='$streamername'";
        $results = mysqli_query($db, $query2);
        $rowData = $results -> fetch_assoc();
        if (mysqli_num_rows($results) == 1) {
             $streamermoney = $rowData['money'] + '500' ;
             $query3 = "UPDATE users SET money='$streamermoney' WHERE username='$streamername' ";
             mysqli_query($db, $query3);
        }
?>