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
		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		echo $username;
        
		 $auth = new Auth();
		 $auth->signup($username,$email,$password);
		 header("Location: http://localhost/Brief5/Home/index");
	
	}
}