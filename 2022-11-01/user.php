<?php

class User
{
    private $email;
    private $password;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        return $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword($password){
        return $this->password = $password;
    }
}