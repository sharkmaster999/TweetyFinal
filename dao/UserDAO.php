<?php
    include 'BaseDAO.php';
    include 'modules/User.php';

    class UserDAO extends BaseDAO{

        //User login
        function user_login($email, $pass){

            $this->open();

            try {
                $stmt = $this->dbcon->prepare("SELECT a.id, p.images, a.firstName, a.lastName, a.username, a.emailaddress, a.password, a.status
                                               FROM accounts AS a, photos AS p
                                               WHERE a.emailaddress = p.email
                                               AND a.emailaddress=?
                                               AND a.password=? ");
                $stmt->bindParam(1, $email);
                $stmt->bindParam(2, $pass);
                $stmt->execute();

                $row = $stmt->fetch();

                if($row[0] == "" || $row[0] == null || $row[5] != $email || $row[6] != $pass){
                    return false;
                }else{
                    $stmt = $this->dbcon->prepare("UPDATE accounts SET status=1 WHERE emailaddress=?;");
                    $stmt->bindParam(1,$email);
                    $stmt->execute();

                    $this->close();
                    return true;
                }
            } catch (PDOException $e) {
                $e->getMessage();
            }

        }

        //User log out
        function user_logout($email){
            $this->open();

            if(isset($_SESSION['email']) && isset($_SESSION['pass'])){

                $stmt = $this->dbcon->prepare("UPDATE accounts SET status=0 WHERE emailaddress=?;");
                $stmt->bindParam(1,$email);
                $stmt->execute();
                $this->close();

                session_unset();
                session_destroy();
                header("Location: login.php");
            }

        }
    }