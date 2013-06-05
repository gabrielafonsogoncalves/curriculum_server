<?php

class Curriculum {
   public $person;
   public $education;
   public $workExperience;
   public $skills;
   public $lenguage;
   
   function __construct() {
      $this->person = $this->getPerson();
      $this->workExperience = $this->getWorkExperience();
      $this->skills = $this->getSkills();
	  $this->lenguage = $this->getLenguage();
	  $this->education = $this->getEducation();
      
   }
   
  function __autoload($class_name) {  
     include_once $class_name . '.php';  
  }
  
  public function getPerson() {
  	 return new Person();
  }
  
  public function getWorkExperience() {
  	 return array(new Work(1), new Work(2));
  }
  
  public function getEducation() {
  	 return array(new Education(1));
  }
  
  public function getSkills() {
  	 return array(new Skill(1), new Skill(2), new Skill(3));
  }
  
  public function getLenguage() {
  	 return array(new Lenguage(1), new Lenguage(2), new Lenguage(3));
  }
}

?>
