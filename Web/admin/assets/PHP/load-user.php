<?php
    require 'connection.php';

    $sqlUser = mysqli_query($conn, "SELECT username, noTelp, email FROM user WHERE status = 2");
    $listUser = [];

    while($temp = mysqli_fetch_assoc($sqlUser)){
        $listUser[] = $temp;
    }
?>