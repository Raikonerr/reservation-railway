<?php 
require_once __DIR__ .'/../model/booking.php'; 
require_once __DIR__.'/../model/connection.php';
require_once __DIR__.'/../model/book.php';
require_once __DIR__.'/../model/user.php';
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

	public function btn(){
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
		$Id_u=$_SESSION['IdUser'];
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

	public function bookUser($Id_v){
			$nom=$_POST['Nom'];
			$prenom=$_POST['Prenom'];
			$email=$_POST['Email'];
			$payement = $_POST['Prix'];
			$booking=new User();
			$booking->addReservation($Id_v,$payement,$nom,$prenom,$email);
			// $booking->bookUser();
		
			//$this->information($idT,$fname,$lname,$tel,$adresse,$email,$date);
			header("Location: http://localhost/Brief5/Home/index");

	}


	// public function archive(){
	// 	$book = new Booking();
	// 	$params=explode("/",$_GET['p']);
	// 	unset($params[0]);
	// 	unset($params[1]);
	// 	$book->archive($params[2]);
	// 	header("location: http://localhost/Brief5/Home/index");
	// }

	// public function active(){
	// 	$book = new Booking();
	// 	$params=explode("/",$_GET['p']);
	// 	unset($params[0]);
	// 	unset($params[1]);
	// 	$book->active($params[2]);
	// 	header("location: http://localhost/Brief5/Home/index");
	// }
	
	public function deleteTrip($id){
		$book = new Booking();
		$book->deleteTrip($id);
		header("Location: http://localhost/Brief5/Home/index");
	}
	public function cancelR()
            {

                $day = strtotime($_POST["Heure_d"]);
                $time =  $day - strtotime('now') + 60 * 60;

                if($time > 1)
                {

                    $Id_r = $_POST["Id_r"];
                    
                    $delete = new Connection();
                	 $delete->delete("reservation","Id_r",$Id_r);

                    // $idTrip = $_POST["idTrip"];
                    // $seats = $delete->Seats($idTrip);
                    // $seats = $seats['seats'] + 1;

                   
                }
				else
				{
					echo "Vous ne pouvez pas annuler votre réservation";
				}


            }

}


    // get posts
  