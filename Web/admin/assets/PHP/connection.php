<?php
    $server = "localhost";
    $user = "root";
    $userPass = "";
    $database = "holy_florist";

    $conn = mysqli_connect($server,$user,$userPass,$database);

    if(!$conn){
        die("<script>alert('Gagal Tersambung dengan database')</script>");
    }
?>