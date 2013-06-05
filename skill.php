<?php
class Skill {
 public $description;

   function __construct($id) {
   	 $this->getSkillById($id);
   }
   
   function getSkillById($id) {
   	 switch ($id)
	 {
		case 1:
			$this->description = "Experiencia como Scrum master";	
  			break;
		case 2:
			$this->description = "Programación en Objective-c para IOS";
			break;
  		case 3:
			$this->description = "Programación para Web en Java utilizando spring";
  			break;
		default:
  			$this->description = "";
	 }
   }
}
?>
