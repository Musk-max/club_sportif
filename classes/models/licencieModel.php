<?php 
class LicencieModel{

    private $licencie_id, $nom, $prenom, $contact_id;

    public function __construct($licencie_id, $nom, $prenom, $contact_id){
        $this ->licencie_id = $licencie_id; 
        $this ->nom = $nom; 
        $this ->prenom = $prenom;
        $this ->contact_id = $contact_id;
    }

    public function getLicencie_id(){
        return $this ->licencie_id;
    }

    public function getNom(){
        return $this ->nom;
    }

    public function getPrenom(){
        return $this ->prenom;
    }

    public function getContact_id(){
        return $this ->contact_id;
    }

    public function setLicencie_id ($licencie_id){
        $this -> licencie_id = $licencie_id;
    }

    public function setNom ($nom){
        $this -> nom = $nom;
    }

    public function setPrenom ($prenom){
        $this -> prenom = $prenom;
    }

    public function setContact_id ($contact_id){
        $this -> contact_id = $contact_id;
    }
}