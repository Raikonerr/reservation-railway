<?php 

require_once "connection.php";
require_once "user.php";

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
        return $ctn->selectOne("person", $username, $password);
          
    }



    public function signup1($username,$password,$email,$nom,$prenom){
        $str=new User();
        $str->insertUser($nom,$prenom,$email);
        $last_idUser= $str->getlastId();
        $iduser= $last_idUser['Id_u'];
    
        $ctn = new Connection();
        $ctn->insert($this->table, ['Nom_utilisateur','Mot_de_passe','role','IdUser'], [$username,$password,'0',$iduser]);
    }
}