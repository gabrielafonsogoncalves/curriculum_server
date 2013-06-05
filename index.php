<?php

  function __autoload($class_name)
  {  
     include_once $class_name . '.php';                      
  }  

  $curriculum = new Curriculum();
  print_r(json_encode($curriculum)); 

?>
