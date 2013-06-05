<?php

class Lenguage {
  public $name;
  public $level;
  
  function __construct($id) {
    $this->LenguageById($id);
  }
	
  function LenguageById($id) {
    switch ($id)
    {
   	  case 1:
     	 $this->name = "Español";
     	 $this->level = "Lengua materna";
     	 break;
	 case 2:
	   	 $this->name = "Ingles";
	   	 $this->level = "Nivel medio";
	   	 break;
  	 case 3:
  	 	 $this->name = "Portugues";
  	 	 $this->level = "Nivel medio";
	 default:
	     //code
	 }
   }
}

?>