<?php 
class Connection
{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $database="reservation";
	private $conn;

	public function __construct()
	{

		try {
			  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
			} catch(PDOException $e) 
			{
			  echo "Connection failed: " . $e->getMessage();
			}
	}
	public function connect()
	{

		try {
			  $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
			} catch(PDOException $e) 
			{
			  echo "Connection failed: " . $e->getMessage();
			}
	}
	public function insert($table,$tableCln,$tableVal)
	{
		$names="";
		$values="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`";
			$values.=$vrls."'".$tableVal[$i]."'";
		}
		$str="INSERT INTO `$table`(".$names.") VALUES (".$values.")";
		$query=$this->conn->prepare($str);
		$query->execute();
	}

	public function selectAll($table)
	{
		$query=$this->conn->prepare("SELECT * FROM `$table`");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function selectOne($table, $username, $password)
	{
		$str = "SELECT * FROM `$table` WHERE Nom_utilisateur=? AND Mot_de_passe=?";
		$query=$this->conn->prepare($str);
		$query->execute(
			[$username,$password]
		);
		$result=$query->fetch(PDO::FETCH_ASSOC);
		return $result;
	}
	public function selectTrip($table, $id)
	{
		$str = "SELECT * FROM `$table` WHERE Id_v=? ";
		$query=$this->conn->prepare($str);
		$query->execute(
			[$id]
		);
		return $query->fetch(PDO::FETCH_ASSOC);
	}
	public function update($table,$tableCln,$tableVal,$val,$id)
	{
		$names="";
		$vrls="";
		for ($i=0; $i <count($tableCln) ; $i++) 
		{ 
			if ($i>0) 
			{
				$vrls=",";
			}
			$names.=$vrls."`".$tableCln[$i]."`='".$tableVal[$i]."'";
		}
		$str="UPDATE $table SET $names WHERE Id_v=$id";
		$query=$this->conn->prepare($str);
		$query->execute();
	}
	public function delete($table,$val,$id)
	{
		$query=$this->conn->prepare("DELETE FROM `$table` WHERE $val=$id");
		$query->execute();
	}
	public function setResult($id){
		//select person.Nom_utilisateur , vo.Ville_d,vo.Ville_a,vo.Heure_d,train.Name_t,reservation.Payement from person JOIN reservation on person.Id_p=reservation.Id_p JOIN vo on vo.Id_v=reservation.Id_v JOIN train on vo.Id_t=train.Id_t where reservation.Id_p=11; 
		$stmt = $this->conn->prepare("select person.Nom_utilisateur , vo.Ville_d,vo.Ville_a,vo.Heure_d,train.Name_t,reservation.Payement from person JOIN reservation on person.Id_p=reservation.Id_p JOIN vo on vo.Id_v=reservation.Id_v JOIN train on vo.Id_t=train.Id_t where reservation.Id_p=$id; ");
  		$stmt->execute();
		return $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
		
	}

	public function getIdUser(){

		$stmt = $this->conn->prepare("select MAX(Id_u) as Id_u from user");
  		$stmt->execute();
        return  $stmt->fetch(PDO::FETCH_ASSOC);
        
	}



	public function addReserve($iduser,$idv,$payement){
		$res="INSERT INTO `reservation`(`Id_p`, `Id_v`, `Payement`) VALUES ('$iduser','$idv','$payement')";
        $queryReserve=$this->conn->prepare($res);
        $queryReserve->execute();
		
	}

	// public function getResult($id){
	// 	//select person.Nom_utilisateur , vo.Ville_d,vo.Ville_a,vo.Heure_d,train.Name_t,reservation.Payement from person JOIN reservation on person.Id_p=reservation.Id_p JOIN vo on vo.Id_v=reservation.Id_v JOIN train on vo.Id_t=train.Id_t where reservation.Id_p=11; 
	// 	$stmt = $this->conn->prepare("select person.Nom_utilisateur , vo.Ville_d,vo.Ville_a,vo.Heure_d,train.Name_t,reservation.Payement from person JOIN reservation on person.Id_p=reservation.Id_p JOIN vo on vo.Id_v=reservation.Id_v JOIN train on vo.Id_t=train.Id_t where reservation.Id_p=$id; ");
  	// 	$stmt->execute();
	// 	return $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
	

	}

	



