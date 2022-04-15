<?php
    require "PHP/register-procces.php";
    $queryEmail = mysqli_query($conn,"SELECT email FROM user");
    $listEmail = [];

    while ($email = mysqli_fetch_assoc($queryEmail)) {
        $listEmail[] = $email;
    }

    if(isset($_POST["register"])){
        $tempRegist = registerAkunBaru($_POST);
        if($tempRegist > 0){
            header('location: login.php');
        }else if($tempRegist < 0){
            echo mysqli_error($conn);exit();    
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Asset/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="http://"><b>Holy Florist</b></a>
        </div>
        <div class="register-card">
            <div class="register-card-msg">
                <p>Buat akun baru</p>
            </div>
            <form action="" method="post" id="register">
                <div class="input mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="feedback feedback-username d-none text-danger">
                        lol
                    </div>
                </div>
                <div class="input mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
                    </div>
                    <div class="feedback feedback-email d-none text-danger">
                        lol
                    </div>
                </div>
                <div class="input mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="feedback feedback-password d-none text-danger">
                        lol
                    </div>
                </div>
                <div class="input mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" name="retypePass" id="retypePass" placeholder="Retype Password">
                    </div>
                    <div class="feedback feedback-retypePass d-none text-danger">
                        lol
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="button-container">
                            <button type="submit" class="btn btn-primary btn-block" name="register" id="btn-register">Register</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="register-menu">
                <p class="mb-0 mt-2">
                    <a href="login.php" class="text-center">saya sudah memiliki akun</a>
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var listEmail = [];
        $listEmail = <?= json_encode($listEmail) ?>;
    </script>
    <script src="Asset/js/jquery-3.6.0.js"></script>
    <script src="Asset/js/register-akun.js"></script>
</body>

</html>