<?php

class Education {
  public $institutionName;
  public $period;
  
  function __construct($id) {
   	 $this->getEducationById($id);
   }
   
  function getEducationById($id) {
    switch ($id)
    {
      case 1:
		$this->institutionName = "Universidad Católica Andrés Bello";
		$this->period = "2006-2012";
		
		break;
	  default:
  		$this->description = "none"; 
  	}
   }
}

?>