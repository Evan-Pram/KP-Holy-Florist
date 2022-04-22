<?php
    require 'PHP/login-session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Asset/css/login.css">
    <link rel="shortcut icon" href="#" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index.php"><b>Holy Florist</b></a>
        </div>
        <div class="login-card">
            <div class="login-card-msg mb-3">
                <p>login untuk kemudahan berbelanja</p>
            </div>
            <div class="feedback-login d-none text-danger mb-2">
                <p></p>
            </div>
            <form action="" method="post" id='login-form'>
                <div class="input mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id='email' placeholder="E-mail">
                    </div>
                    <div class="feedback-email d-none text-danger">
                        lol
                    </div>
                </div>
                <div class="input mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" id='password' placeholder="Password">
                    </div>
                    <div class="feedback-password d-none text-danger">
                        lol
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-8 align-self-start bottom-login">
                            <input type="checkbox" class="form-check-input" id="rememberCheck">
                            <label for="rememberCheck" class="form-check-label">Remember me</label>
                        </div>
                        <div class="col-4 align-self-end button-container">
                            <button type="submit" class="btn btn-primary btn-block" id="btn-login" name="SignIn">Sign In</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="login-menu">
                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.php" class="text-center">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>

    <script src="Asset/js/jquery-3.6.0.js"></script>
    <script src="Asset/js/login.js"></script>
</body>

</html>