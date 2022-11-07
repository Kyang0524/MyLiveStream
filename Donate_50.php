<?php
        $clientmoney = isset($_POST['clientmoney']) ? $_POST['clientmoney'] : '';
        $clientname  = isset($_POST['clientname']) ? $_POST['clientname'] : '' ;
        $streamername= isset($_POST['streamername']) ? $_POST['streamername'] : '';

        $DATABASE_HOST='20.25.120.191:3306';
        $DATABASE_USER='root';
        $DATABASE_PASS='123456';
        $DATABASE_NAME='users';

        $db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

        $query = "UPDATE users SET money='$clientmoney' WHERE username='$clientname' ";
        mysqli_query($db, $query);



        $query2 = "SELECT money,username FROM users WHERE username='$streamername'";
        $results = mysqli_query($db, $query2);
        $rowData = $results -> fetch_assoc();
        if (mysqli_num_rows($results) == 1) {
             $streamermoney = $rowData['money'] + '50' ;
             $query3 = "UPDATE users SET money='$streamermoney' WHERE username='$streamername' ";
             mysqli_query($db, $query3);
        }
?>