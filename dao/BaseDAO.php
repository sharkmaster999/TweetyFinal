<?php

class BaseDAO {
    protected $user = 'root';
    protected $pass = '';
    protected $dbname = 'tweety';
    protected $dbcon = null;

    function open(){
        $this->dbcon = new PDO("mysql:host=localhost;dbname=" . $this->dbname, $this->user, $this->pass);
    }

    function close(){
        $this->dbcon = NULL;
    }

}