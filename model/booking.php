<?php 
require_once "connection.php";

class Reservation{
	private $table="vo";
	private $Heure_d;
    private $Heure_a;
    private $Id_t;
    private $Ville_d;
    private $Ville_a;
    private $Prix;

    
	function __construct($Heure_d,$Heure_a,$Id_t,$Ville_d,$Ville_a,$Prix,$Id_v)
	{
		$this->Id_v=$Id_v;
		$this->Heure_d=$Heure_d;
		$this->Heure_a=$Heure_a;
        $this->Id_t=$Id_t;
        $this->Ville_d=$Ville_d;
        $this->Ville_a=$Ville_a;
        $this->Prix=$Prix;

	}

    public function save()
	{
		$ctn=new Connection();
		$ctn->insert($this->table,["Heure_d","Heure_a","Id_t","Ville_d","Ville_a","Prix",],[$this->Heure_d,$this->Heure_a,$this->Id_t,$this->Ville_d,$this->Ville_a,$this->Prix]);
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

	// public static  function fetchr(){
	// 	// $query=$this->conn->prepare("SELECT p.Nom_utilisateur , v.Ville_d , v.Ville_a , v.Heure_d ,t.Name_t as Nom_Train ,Payement FROM train T , person p, vo v, reservation WHERE reservation.Id_p=p.Id_p and reservation.Id_v=v.Id_v and v.Id_t=T.Id_t and p.id_p=?");
	// 	// $query->execute();
	// 	// return $query->fetchAll(PDO::FETCH_ASSOC);
	// 	$ctn=new Connection();
	// 	$sql="SELECT p.Nom_utilisateur , v.Ville_d , v.Ville_a , v.Heure_d ,t.Name_t as Nom_Train ,Payement FROM train T , person p, vo v, reservation WHERE reservation.Id_p=p.Id_p and reservation.Id_v=v.Id_v and v.Id_t=T.Id_t";
	// 	$sql=$ctn->prepare($sql);
	// 	if($sql->execute())
	// 		return $sql->fetchAll();
	// 	return 0;
	// }

	// public function selectAll()
	// {
	// 	$query=$this->conn->prepare("SELECT p.Nom_utilisateur , v.Ville_d , v.Ville_a , v.Heure_d ,t.Name_t as Nom_Train ,Payement FROM train T , person p, vo v, reservation WHERE reservation.Id_p=p.Id_p and reservation.Id_v=v.Id_v and v.Id_t=T.Id_t");
	// 	$query->execute();
	// 	return $query->fetchAll(PDO::FETCH_ASSOC);
	// }

}