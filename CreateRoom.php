<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CreateRoom</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style/JoinRoom.css'>
</head>
<body>
    
    <main id="lobby-container">
        <div id="form-container">
            <div id="form__container__header">
                <p>👋 Input username to create a Room</p>
            </div>

            <div id="form__content__wrapper">
                <form action="CreateRoom.php" method="post">
                    <?php include('errors.php');?>
                    <input type="text" name="streamer" id="streamer" required/>
                    <button type="submit" class="submit-btn" name="CreateRoom" herf="GetDB.php" onclick="SetCreateName()" >Submit</button>
                </form>
            </div>
        </div>
    </main>

    <script type="text/javascript" src="js/room_rtc.js"></script>

</body>