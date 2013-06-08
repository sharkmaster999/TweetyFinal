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
    <title>Tweety</title>
</head>
<body>
    Hello <h5><?php echo $fname . " " . $lname ; ?></h5>
    <a href="logout.php">Log out</a> <br/><br/>
    <a href="profile.php">Profile</a> <br/><br/>

    <div>
        <label class="control-label" for="inputIcon">Search:</label>
        <div class="controls">
            <div class="input-prepend">
                <form class="input-append">
                    <input data-provide="typeahead" data-source="['Alabama', 'Aklahama']" class="span2 input-large" onkeyup="checkLastname(this)" id="srchInput" name="srchInput" type="text"> //Search input
                    <span class="add-on"><i class="icon-search"></i></span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>