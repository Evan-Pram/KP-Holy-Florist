<?php
    session_start();

    if(isset($_SESSION["ownerLoged"]) && isset($_SESSION["adminLoged"]) && isset($_SESSION["userLoged"])){
        header("location: index.php");
    }
?>