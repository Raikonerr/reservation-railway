<?php 


require_once __DIR__ . '/../model/auth.php';


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
		$username = $_POST['username'];
		$password = $_POST['password'];
		$auth = new Auth();
		$auth->signin($username, $password);
		header("Location: http://localhost/Brief5/Home/index");
	}
}