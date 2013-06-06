<?php
    session_start();
    include 'dao/UserDAO.php';

    if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])){
        header("Location: login.php");
    }else{
        $email = $_SESSION['email'];
    }
?>

<html>
<head>
    <link href="css/login_bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <title>Tweety | Home</title>
</head>
<body>
    Hello <?php echo $email; ?> <br/>
    <a href="logout.php">Log out</a>
</body>
</html>
