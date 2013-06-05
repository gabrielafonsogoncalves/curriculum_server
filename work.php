<?php

class Work {
   public $name;
   public $phone;
   public $duration;
   public $detail;
   
	function __construct($id) {
	  $this->getWorkById($id);
   	}
	
	function getWorkById($id) {
   	 switch ($id)
	 {
		case 1:
		 $this->name = "Divux Systems C.A";
         $this->phone = "(0212) 2456795";
	     $this->detail = "Analista desarrollador y lider de proyecto";
	     $this->duration = "1 año y 5 meses";
  	  	 break;
		case 2:
	   	 $this->name = "Divux Systems C.A";
         $this->phone = "(0212) 2456795";
	     $this->detail = "Pasante";	
	     $this->duration = "6 meses";
		 break;
		default:
		//Code
	 }
   }

}

?>
