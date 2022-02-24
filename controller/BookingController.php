<?php 

class BookingController{
    public function __construct()
	{
	}
	
	public function index()
	{
		// $produits=Produit::select();
		require_once __DIR__ ."/../view/booking.php";
}
}