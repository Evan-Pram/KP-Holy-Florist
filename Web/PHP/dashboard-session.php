<?php
    session_start();

    if(isset($_SESSION["userLoged"])){
        header("location: index.php");
    }
?>