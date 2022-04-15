<?php
    require 'connection.php';
    session_start();
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    //ambil data dari db sesuai input
    $queryUser = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'"));
    
    //cek email benar
    if($queryUser != null){
        if(password_verify($password, $queryUser['password'])){
            if($queryUser["status"] == 2){
                $_SESSION["userLoged"] = true;
                $_SESSION["ID"] = $queryUser["id_User"];
                echo "1";
            }else if($queryUser["status"] == 1){
                $_SESSION["adminLoged"] = true;
                $_SESSION["ID"] = $queryUser["id_User"];
                echo '1';
            }else if($queryUser["status"] == 0){
                $_SESSION["ownerLoged"] = true;
                $_SESSION["ID"] = $queryUser["id_User"];
                echo '1';
            }
        }else{
            echo '0';
        }
    }else{
        echo '0';
    }
?>