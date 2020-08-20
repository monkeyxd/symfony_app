<?php

namespace App\Entity;

class Personne {

	protected $login;
	protected $password;
	protected $date;
    protected $email;

    public function getLogin(){
    	return $this->login;
    }

    public function setLogin($login){
    	$this->login = $login;
    }

    public function getPassword(){
    	return $this->password;
    }

    public function setPassword($password){
    	$this->password = $password;
    }

    public function getEmail(){
    	return $this->email;
    }

    public function setEmail($email){
    	$this->email = $email;
    }

    public function getDate(){
    	return $this->date;
    }

    public function setDate($date){
    	$this->date = $date;
    }

}



