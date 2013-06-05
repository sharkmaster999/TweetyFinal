<?php
    session_start();

    include 'dao/UserDAO.php';

    $action = new UserDAO();

    $email = $_SESSION['emailadd'];

    $action->user_logout($email);
?>