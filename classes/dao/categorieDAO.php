<?php
class CategorieDAO{
    private $categoriePdo;
    public function __construct(PDO $categoriePdo){
        $this->categoriePdo = $categoriePdo;

    }
public function create(categorieModel $categorie){
    try{
        $submit = $this->categoriePdo->prepare("INSERT INTO categories(code_raccourci,nom)VALUES(?, ?)");

        $submit->execute([$categorie->getCode_raccourci(),$categorie->getNom()]);

        return true;
    }
    catch(PDOException $e){
        return false;
    }
}

public function getById($categorie_id){
    try{
        $submit = $this->categoriePdo->prepare("SELECT*FROM categories WHERE categorie_id = ?");
        $submit->execute([$categorie_id]);
        $row = $submit->fetch(PDO::FETCH_ASSOC);
        if($row){
            return new categorieModel($row['categorie_id'], $row['code_raccourci'], $row['nom']);
        }else{
            return null;
        }
    }
    catch(PDOException $e){
        return null;
    }
}

public function getAll(){
    try{
        $submit = $this->categoriePdo->query("SELECT*FROM categories");
        $categories = [];
        while ($row = $submit->fetch (PDO::FETCH_ASSOC)){
            $categories[] = new categorieModel ($row['categorie_id'], $row['code_raccourci'], $row['nom']);
        }
        return $categories;
    }
    catch(PDOException $e){
        return[];
    }
}

public function update(categorieModel $categorie){
    try{
        $submit = $this->categoriePdo->prepare ("UPDATE categories SET code_raccourci=?, nom=? WHERE categorie_id = ?");
        $submit->execute ([$categorie->getCode_raccourci(), $categorie->getNom(), $categorie->getCategorie_id()]);

        return true;
    }
    catch (PDOException $e){
        return false;
    }
}

public function deleteById($categorie_id){
    try{
        $submit = $this->categoriePdo->prepare("DELETE FROM categories WHERE categorie_id = ?");
        $submit->execute([$categorie_id]);
            return true;
        }
        catch (PDOException $e){
            return false;
    }
}

}