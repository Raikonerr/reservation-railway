<?php 

require_once "connection.php";

/**
 * 
 */
class Voyage
{
	private $table="vo";
	private $Heure_d;
    private $Heure_a;
    private $Id_t;
    private $Ville_d;
    private $Ville_a;
    private $Prix;
	private $Status;
	


	function __construct($Heure_d,$Heure_a,$Id_t,$Ville_d,$Ville_a,$Prix,$Place,$Status)
	{
		//$this->Id_v=$Id_v;
		$this->Heure_d=$Heure_d;
		$this->Heure_a=$Heure_a;
        $this->Id_t=$Id_t;
        $this->Ville_d=$Ville_d;
        $this->Ville_a=$Ville_a;
        $this->Prix=$Prix;
		$this->Place=$Place;
		$this->Status=$Status;


	}


	public function save()
	{
		$ctn=new Connection();
		$ctn->insert($this->table,["Heure_d","Heure_a","Id_t","Ville_d","Ville_a","Prix","nb_places","Status"],[$this->Heure_d,$this->Heure_a,$this->Id_t,$this->Ville_d,$this->Ville_a,$this->Prix,$this->Place,$this->Status]);
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


	public static function cancel($id)
	{
		$ctn=new Connection();
		 return $ctn->cancel($id);
	
	
	}

	public static function  active($id)
	{
		$ctn=new Connection();
		return $ctn->active($id);
	}

	public static function edit($id)
	{
		$ctn=new Connection();
		return $ctn->selectTrip("vo",$id);
	}

	public function update($id)
	{
		$ctn=new Connection();
		$ctn->update($this->table,["Heure_d","Heure_a","Id_t","Ville_d","Ville_a","Prix","nb_places"],[$this->Heure_d,$this->Heure_a,$this->Id_t,$this->Ville_d,$this->Ville_a,$this->Prix,$this->Place],"Id_v",$id);
	}
}

	Class Person extends Voyage{
		private $table ='person';
		private $Nom_utilisateur ='Nom_utilisateur';
		private $Mail='Mail';
		function __construct()
	{
	

	}
		
		

	}

