<?php
    require "connection.php";

    function registerAkunBaru($data){
        global $conn;
        
        $username = htmlspecialchars(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $noTelp = htmlspecialchars($data['noTelp']);
        $email = htmlspecialchars($data["email"]);

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        //upload menuju database
        mysqli_query($conn, "INSERT INTO user (username, noTelp, password, email) VALUES ('$username', '$noTelp', '$password', '$email')");
        return mysqli_affected_rows($conn);
    }
?>