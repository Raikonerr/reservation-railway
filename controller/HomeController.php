<?php 

require_once __DIR__. '/../model/admin.php';

class HomeController
{
	public function __construct()
	{
	}

	public function index()
	{
		
		$voyage=Voyage::select();
		require_once __DIR__."/../view/index.php";
	}
}