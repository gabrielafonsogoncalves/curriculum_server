<?php

class Person {
   public $name;
   public $lastname;
   public $idNumber;
   public $maritalStatus;
   public $phoneNumber;
   public $email;
   public $photo;
   
   function __construct() {
      $this->name = "Gabriel Alejandro";
      $this->lastname = "Afonso Goncalves";
      $this->idNumber = "v-20068561";
      $this->phoneNumber = "(0414) 4578402";
      $this->email = "gabrielafonsogoncalves@gmail.com";
      $this->maritalStatus = "Soltero";
      $this->photo = "photo.png";
   }
}

?>
