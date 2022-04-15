<?php
    require "connection.php";

    function registerAkunBaru($data){
        global $conn;
        
        $username = htmlspecialchars(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $email = htmlspecialchars($data["email"]);

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //upload menuju database
        mysqli_query($conn, "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')");
        return mysqli_affected_rows($conn);
    }
?>