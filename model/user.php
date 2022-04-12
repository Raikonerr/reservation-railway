<?php 
require_once "connection.php";


Class User{
    public function __construct(){

    }




    public function insertUser($nom,$prenom,$email)
    {

        $str = new Connection();
        $str->insert('user', ['Nom','Prenom','Email'], [$nom,$prenom,$email]);

		
    }
    public function getLastId()
    {
        $str = new Connection();
        $result =$str->getIdUser();
        return $result;

    }
    public function addReservation($Id_v,$payement,$nom,$prenom,$email)
    {
        $str = new Connection();
        $this->insertUser($nom,$prenom,$email);
        print_r($this->getLastId());
        $last_idUser = $this->getLastId();
        print_r($Id_v);
        print_r($payement);

        $iduser= $last_idUser['Id_u'];

        $str->addReserve($iduser,$Id_v,$payement);
      
        
    }
}