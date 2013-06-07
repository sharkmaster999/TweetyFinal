<?php
    session_start();
    include 'dao/UserDAO.php';

    if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
        header("Location: login.php");
    }else{
        $email = $_SESSION['email'];
        $pass = $_SESSION['pass'];

        $info = new UserDAO();
        $user = $info->viewUserInfo($email);
        $lname = $user->getLastName();
        $fname = $user->getFirstName();
        /*$address = $user->getAddress();
        $contact = $user->getContactNum();
        $gender = $user->getGender();
        $age = $user->getAge();
        $username = $user->getUsername();*/

    }
?>
<!-- This is tweety home -->
<html>
<head>
    <link href="css/login_bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <title>Tweety | Home</title>
</head>
<body>
    Hello <h5><?php echo $fname . " " . $lname ; ?></h5>
    <a href="logout.php">Log out</a>
</body>
</html>