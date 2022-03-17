<?php 

require_once "connection.php";


/**
 * 
 */
class Myreservation
{
	private $tablev="vo";
    private $tablep="person";
    private $tabler="reservation";
	private $Heure_d;
    private $Nom_utilisateur;
    private $Nom_Train;
    private $Ville_d;
    private $Ville_a;
    private $Payement;
    private $Id_t;
    private $Id_p;
    private $Id_r;
   
    private $ctn;
    //Nom_utilisateur 	Ville_d 	Ville_a 	Heure_d 	Nom_Train 	Payement 	
	public function __construct(){
        $this->ctn = new Connection();

    }


	public function fetchc($id)
	{
	  return $this->ctn->setResult($id);
	}


	public function save()
	{
		
		$this->ctn->insert($this->table,["Heure_d","Heure_a","Id_t","Ville_d","Ville_a","Prix",],[$this->Heure_d,$this->Heure_a,$this->Id_t,$this->Ville_d,$this->Ville_a,$this->Prix]);
	}

	public static function select()
	{
		return $this->ctn->selectAll("vo");
	}

	public static function delete($Id_v)
	{
		return $this->ctn->delete("vo","Id_v",$Id_v);
	}


	public static function edit($id)
	{
		return $this->ctn->selectTrip("vo",$id);
	}

	public function update($id)
	{
		$this->ctn->update($this->table,["Heure_d","Heure_a","Id_t","Ville_d","Ville_a","Prix"],[$this->Heure_d,$this->Heure_a,$this->Id_t,$this->Ville_d,$this->Ville_a,$this->Prix],"Id_v",$id);
	}

   

}

	