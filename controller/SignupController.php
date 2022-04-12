<?php 


require_once __DIR__ . '/../model/auth.php';


class SignupController
{
	
	public function __construct()
	{

	}

	public function index()
	{
		 require_once __DIR__."/../view/signup.php";
	}
	public function signupfunc() {
		
		// echo 'hello';
		
		$username = $_POST['Nom_utilisateur'];
		$email = $_POST['Email'];
		$password = $_POST['Mot_de_passe'];
		$nom = $_POST['Nom'];
		$prenom = $_POST['Prenom'];


        
		 $auth = new Auth();
		 $auth->signup1($username,$password,$email,$nom,$prenom);
		 header("Location: http://localhost/Brief5/Home/index");
	
	}
}