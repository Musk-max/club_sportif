<?php 
class EducateurModel{

    private $educateur_id, $email, $mdp;

    public function __construct($educateur_id, $email, $mdp){
        $this ->educateur_id = $educateur_id; 
        $this ->email = $email;
        $this ->mdp = $mdp;
    }

    public function getEducateur_id(){
        return $this ->educateur_id;
    }

    public function getEmail(){
        return $this ->email;
    }

    public function getMdp(){
        return $this ->mdp;
    }

    public function setEducateur_id ($educateur_id){
        $this -> educateur_id = $educateur_id;
    }

    public function setEmail ($email){
        $this -> email = $email;
    }

    public function setMdp ($mdp){
        $this -> mdp = $mdp;
    }
}