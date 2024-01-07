<?php 
class ContactModel{

    private $contact_id, $nom, $prenom, $email, $numero;

    public function __construct($contact_id, $nom, $prenom, $email, $numero){
        $this ->contact_id = $contact_id; 
        $this ->nom = $nom; 
        $this ->prenom = $prenom;
        $this ->email = $email;
        $this ->numero = $numero;
    }

    public function getContact_id (){
        return $this ->contact_id ;
    }

    public function getNom(){
        return $this ->nom;
    }

    public function getPrenom(){
        return $this ->prenom;
    }

    public function getEmail(){
        return $this ->email;
    }

    public function getNumero(){
        return $this ->numero;
    }

    public function setContact_id ($contact_id){
        $this -> contact_id = $contact_id;
    }

    public function setNom ($nom){
        $this -> nom = $nom;
    }

    public function setPrenom ($prenom){
        $this -> prenom = $prenom;
    }

    public function setEmail ($email){
        $this -> email = $email;
    }

    public function setNumero ($numero){
        $this -> numero = $numero;
    }
}