<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' media='screen' href='style/showDB.css'>
</head>
    <body>
        <table>
            <tr>
                <th>UID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Money</th>
            </tr>
            <?php 
            $DATABASE_HOST='20.25.120.191:3306';
            $DATABASE_USER='root';
            $DATABASE_PASS='123456';
            $DATABASE_NAME='users';
            // connect to the database
            $db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
            if( $db -> connect_error){
                die("Connection failed:" . $db -> connect_error);
                
            }

            $sql = "SELECT * from users";
            $result = $db -> query($sql);

            if($result -> num_rows >0){
                while($row = $result -> fetch_assoc()){
                    echo "<tr><td>". $row["UID"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td><td>" . $row["money"] . "</td></tr>" ;
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }
            $db ->close();
            ?>
        </table>
    </body>
</html>