<?php 
require_once "connection.php";
require_once __DIR__.'/../pdf_creator.php';


class Booking{
	private $table="reservation";
	private $tablep="person";
	private $tablev="vo";
	
   
   
    
	function __construct() {
		// if(isset($_SESSION['Id_p']))

	}

    public function save($Id_p,$Id_v,$Payement)
	{
		$ctn=new Connection();
		$ctn->insert($this->table,["Id_p","Id_v","Payement"],[$Id_p,$Id_v,$Payement]);
		

	}

	public static function select()
	{
		$ctn=new Connection();
		return $ctn->selectAll("vo");
	}

	public static function delete($Id_v)
	{
		$ctn=new Connection();
		return $ctn->delete("vo","Id_v",$Id_v);
	}


	public static function edit($id)
	{
		$ctn=new Connection();
		return $ctn->selectTrip("vo",$id);
	}

	public function update($id)
	{
		$ctn=new Connection();
		$ctn->update($this->table,["Heure_d","Heure_a","Id_t","Ville_d","Ville_a","Prix"],[$this->Heure_d,$this->Heure_a,$this->Id_t,$this->Ville_d,$this->Ville_a,$this->Prix],"Id_v",$id);
	}

	public function fetchr($id){
		$ctn =new Connection();
		$ctn->select;
		
	}
	

}