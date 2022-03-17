<?php 
require_once __DIR__ .'/../model/booking.php'; 
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/book.php';
require_once __DIR__.'/../model/book';
session_start();


class Card{
    public function __construct()
	{
		
	}

	public function index($Id_v)
	{
		// $voyage=Reservation::select();
		//$ctn=new Connection();
		// require_once __DIR__."/../view/card.php";
		
	}
	public function booking()
	{
		require_once __DIR__."/../view/voyage.php";
	}
	public function book()
	{
		// $Heure_d=$_POST['Heure_d'];
		// $Heure_a=$_POST['Heure_a'];
        // $Id_t=$_POST['Id_t'];
		// $Ville_d=$_POST['Ville_d'];
        // $Ville_a=$_POST['Ville_a'];
		$Prix=$_POST['prix'];

		$idV=$_POST['idV'];
		$idP=$_POST['idP'];
		var_dump($idP);


		$voyage=new Booking();
		if(isset($_SESSION['Id_p']))
		{
			$voyage->save($idP,$idV,$Prix);
		}
		
		header("Location: http://localhost/Brief5/Booking");
	}
	public function cancel($Id_r)
	{
		$voyage=Admin::delete($Id_r);
		header("Location: http://localhost/Brief5/admin");
	}
	


}