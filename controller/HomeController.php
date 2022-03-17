<?php 

require_once __DIR__. '/../model/admin.php';
session_start();
class HomeController
{
	public function __construct()
	{
	}

	public function index()
	{
		
		
		require_once __DIR__."/../view/index.php";
		}
	public function voyage()
	{
		$voyage=Voyage::select();
		require_once __DIR__."/../view/voyage.php";
	}
}
