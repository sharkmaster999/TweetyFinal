<?php

class User {
    private $id;
    private $lastName;
    private $firstName;
    private $address;
    private $contactNum;
    private $gender;
    private $age;
    private $username;
    private $emailaddress;
    private $password;

    function __construct($address, $age, $contactNum, $emailaddress, $firstName, $gender, $id, $lastName, $password, $username)
    {
        $this->address = $address;
        $this->age = $age;
        $this->contactNum = $contactNum;
        $this->emailaddress = $emailaddress;
        $this->firstName = $firstName;
        $this->gender = $gender;
        $this->id = $id;
        $this->lastName = $lastName;
        $this->password = $password;
        $this->username = $username;
    }


    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setContactNum($contactNum)
    {
        $this->contactNum = $contactNum;
    }

    public function getContactNum()
    {
        return $this->contactNum;
    }

    public function setEmailaddress($emailaddress)
    {
        $this->emailaddress = $emailaddress;
    }

    public function getEmailaddress()
    {
        return $this->emailaddress;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

}