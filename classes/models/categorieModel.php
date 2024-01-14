<?php 
    class categorieModel{

    private $categorie_id, $nom, $code_raccourci;

    public function __construct($categorie_id, $nom, $code_raccourci){
        $this->categorie_id = $categorie_id; 
        $this->nom = $nom; 
        $this->code_raccourci = $code_raccourci;
    }

    public function getCategorie_id(){
        return $this->categorie_id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getCode_raccourci(){
        return $this->code_raccourci;
    }

    public function setCategorie_id ($categorie_id){
        $this->categorie_id = $categorie_id;
    }

    public function setNom ($nom){
        $this->nom = $nom;
    }

    public function setCode_raccourci ($code_raccourci){
        $this->code_raccourci = $code_raccourci;
    }
}