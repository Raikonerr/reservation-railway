<?php 

require_once "connection.php";

class Auth {
    public $table = 'person';
    

    public function __construct() {
      
    }


    public function signup($username, $email, $password) {
        
        $ctn = new Connection();
        $ctn->insert($this->table, ['Nom_utilisateur','Email','Mot_de_passe','role'], [$username,$email , $password,'0']);
    }
    public function signin($username, $password) {
        $ctn = new Connection();
        return $ctn->selectOne("person", $password, $username);
          
    }
}