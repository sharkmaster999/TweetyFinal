<?php
    session_start();

    include 'dao/UserDAO.php';

    $action = new UserDAO();

    $email = $_SESSION['email'];

    $action->user_logout($email);
?>