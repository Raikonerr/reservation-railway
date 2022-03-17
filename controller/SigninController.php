<?php 


require_once __DIR__ . '/../model/auth.php';
session_start();

class SigninController
{
	
	public function __construct()
	{
	}

	public function index()
	{
		// $produits=Produit::select();
		require_once __DIR__."/../view/signin.php";
	}

	public function signin() {
		$username = $_POST['Nom_utilisateur'];
		$password = $_POST['Mot_de_passe'];
		$auth = new Auth();
		$sign=$auth->signin($username, $password);
		if(!empty($sign))
		{
			$_SESSION["Id_p"] = $sign['Id_p'];
			$_SESSION["Nom_utilisateur"] = $sign['Nom_utilisateur'];
			$_SESSION["Role"] = $sign['Role'];
			require_once __DIR__."/../view/index.php";
		}else
		require_once __DIR__."/../view/signin.php";
	}
	public function logout()
	{
		unset($_SESSION["Id_p"]);
		unset($_SESSION["Nom_utilisateur"]);
		unset($_SESSION["Role"]);
		session_destroy();
		require_once __DIR__."/../view/signin.php";
	}
}