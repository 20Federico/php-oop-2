<?php

class User {

  private $type = '';
  protected $name = '';
  protected $surname = '';
  protected $email = '';

  function __construct($_name, $_surname) {
    $this->setName($_name);
    $this->setSurname($_surname);
  }

  public function setName($name) {
    //aggiungi controlli
    
    $this->name = $name;
  }

  public function getName() {
    //crea un trait per formattazione dei nomi
    $nameToLowerCase = strtolower($this->name);
    $nameFirstUpper = ucfirst($nameToLowerCase);
    
    return $nameFirstUpper;
  }

  public function setSurname($surname) {
    //aggiungi controlli

    $this->surname = $surname;
  }

  public function getSurname() {

    $surnameToLowerCase = strtolower($this->surname);
    $surnameFirstUpper = ucfirst($surnameToLowerCase);

    return $surnameFirstUpper;
  }

  public function setEmail($email) {
    //aggiungi controlli

    $this->email = $email;
  }

  public function getEmail() {

    return $this->email;;
  }

}