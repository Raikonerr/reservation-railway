<?php 

require_once __DIR__."/../model/admin.php";
/**
 * 
 */
class AdminController
{
	
	public function __construct()
	{
		
	}

	public function index()
	{
		$voyage=Voyage::select();
		
		require_once __DIR__."/../view/viewadmin/admin.php";
		
	}

	public function create()
	{
		$voyage=Voyage::select();
		
		require_once __DIR__."/../view/viewadmin/create.php";
	}

	public function save()
	{

		$Heure_d=$_POST['Heure_d'];
		$Heure_a=$_POST['Heure_a'];
        $Id_t=$_POST['Id_t'];
		$Ville_d=$_POST['Ville_d'];
        $Ville_a=$_POST['Ville_a'];
		$Prix=$_POST['Prix'];
		$Place=$_POST['nb_places'];
		$Status="active";
        
		$voyage=new Voyage($Heure_d,$Heure_a,$Id_t,$Ville_d,$Ville_a,$Prix,$Place,$Status);
		$voyage->save();
		header("Location: http://localhost/Brief5/admin/index");
	}

	public function edit($id)
	{
		$voyage=Voyage::edit($id);	
		$ctn=new Connection();
		$selectedTrip=$ctn->selectTrip("vo",$id);
		require_once __DIR__."/../view/viewadmin/edit.php";
	}

	public function update($id)
	{
		// $id=$_POST['Id_v'];
		$Heure_d=$_POST['Heure_d'];
		$Heure_a=$_POST['Heure_a'];
        $Id_t=$_POST['Id_t'];
		$Ville_d=$_POST['Ville_d'];
        $Ville_a=$_POST['Ville_a'];
		$Prix=$_POST['Prix'];
		$Place=$_POST['nb_places'];
		$Status="active";
		$voyage=new Voyage($Heure_d,$Heure_a,$Id_t,$Ville_d,$Ville_a,$Prix,$Place,$Status);
		$voyage->update($id);
		header("Location: http://localhost/Brief5/admin/index");
	}
	public function delete($id)
	{
		$voyage=Voyage::delete($id);
		header("Location: http://localhost/Brief5/admin/index");
	}

	public function cancel($id){
		$voyage=Voyage::cancel($id);
		header("Location: http://localhost/Brief5/admin/index");
	}

	public function active($id){
		$voyage=Voyage::active($id);
		header("Location: http://localhost/Brief5/admin/index");
	}



}