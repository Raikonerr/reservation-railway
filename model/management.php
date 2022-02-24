<?php 

 require_once "connection.php";


class Managment {
    private $table = 'vo';

    public function __construct() {

    }

    public function addtrip ($Heure_d, $Heure_a, $Jour, $Ville_d, $Ville_a,$Prix) {
        $ctn = new Connection();
       
        $ctn->insert($this->table, ['Heure_d', 'Heure_a', 'Jour', 'Ville_d', 'Ville_a','Prix'], [$Heure_d, $Heure_a, $Jour, $Ville_d, $Ville_a, $Prix]);
    }
    public function deletetrip ($id) {
        $ctn = new Connection();
        $ctn->delete($this->table, $id);
    }
}

?>