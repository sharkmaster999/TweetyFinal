<?php
    session_start();
    include 'dao/UserDAO.php';

    $pro = new UserDAO();

    if(isset($_SESSION['email']) && isset($_SESSION['pass'])){
        header("Location: index.php");
    }else{
        if(isset($_POST['email']) && isset($_POST['pass'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $verrify = $pro->user_login($email, $pass);

            if($verrify){
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['pass'] = $_POST['pass'];

                header("Location: index.php");
            }else{
                echo "<script>alert('Unknown user!');</script>";
            }

        }
    }
?>

<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/tweety.jpg"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <link href="layout/login_header.php" rel="stylesheet">
    <link rel="stylesheet"href="css/login.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js/user.js"></script>
    <script src="js/modernizr.custom.63321.js"></script>
    <title>Tweety | Login</title>
</head>
<body>
    <?php include 'layout/login_header.php'; ?>

    <div class="container">
        <br><br><br><br><br><br><br><br><br><br>
        <section class="main">
            <form class="form-1" action="login.php" method="post" onsubmit="return checkEmail();">
                <div class="div_wrapper_login">
                    <span class="lab_login">Login</span>
                </div>
                <p class="field">
                    <input type="text" name="email" id="email" placeholder="Email address">
                    <i class="icon-user icon-large"></i>
                </p>
                <p class="field">
                    <input type="password" name="pass" id="pass" placeholder="Password">
                    <i class="icon-lock icon-large"></i>
                </p>
                <p class="submit">
                    <button type="submit" name="submit" id="loginBtn"><i class="icon-arrow-right icon-large"></i></button>
                </p>
            </form>
        </section>
    </div>


    <!--<form class="form-horizontal" action="login.php" method="post">
            Email Address: <input type="text" class="input-large" id="email" name="email"/><br />
            Password: <input type="password" id="password" name="pass"/><br/>
            <button type="submit" >Submit</button> &nbsp; <button type="reset">Clear</button>
        </form>-->
</body>
</html>