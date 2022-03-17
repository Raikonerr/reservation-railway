<?php


require_once __DIR__ .'/../model/myreseravtion.php'; 

session_start();
  class MyreservationController{
      public function index(){

        $ctn = new Myreservation;

        $result = $ctn->fetchc($_SESSION['Id_p']);
        // var_dump($result);
        
        require_once __DIR__.'/../view/card.php';
        
      }
    

    
        
	
		

      
  }