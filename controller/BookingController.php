<?php 
require_once __DIR__ .'/../model/booking.php'; 
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/book.php';
session_start();
class BookingController
{
	
	public function __construct()
	{
		
	}

	public function index($Id_v)
	{
		$voyage=Reservation::select();
		$ctn=new Connection();
		
			$getTrip= $ctn->selectTrip("vo",$Id_v);
			
		
		require_once __DIR__."/../view/booking.php";
	}

		
		
			
		
	
	public function booking()
	{
		require_once __DIR__."/../view/voyage.php";
	}
	public function book($Id_v)
	{
		// $Heure_d=$_POST['Heure_d'];
		// $Heure_a=$_POST['Heure_a'];
        // $Id_t=$_POST['Id_t'];
		// $Ville_d=$_POST['Ville_d'];
        // $Ville_a=$_POST['Ville_a'];
		$Prix=$_POST['prix'];

		$idV=$Id_v;
		$idP=$_SESSION['Id_p'];
		var_dump($idP);


		$voyage=new Booking();
		if(isset($_SESSION['Id_p']))
		{
			$voyage->save($idP,$idV,$Prix);
		}
		
		header("Location: http://localhost/Brief5/Home");
	}
	public function cancel($Id_r)
	{
		$voyage=Admin::delete($Id_r);
		header("Location: http://localhost/Brief5/admin");
	}
	

}


    // get posts
  