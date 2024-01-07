<?php
class LicencieDAO{
    private $licenciePdo;
    public function __construct (PDO $licenciePdo){
        $this -> licenciePdo = $licenciePdo;

    }
public function create (licencieModel $licencie){
    try{
        $submit = $this -> licenciePdo -> prepare ("INSERT INTO licencies(licencie_id, nom, prenom, contact_id) VALUES (?, ?, ?, ?)");

        $submit -> execute ([$licencie ->getLicencie_id(), $licencie ->getNom(), $licencie ->getPrenom(), $licencie ->getContact_id()]);

        return true;
    }
    catch (PDOException $e){
        return false;
    }
}

public function getById($licencie_id){
    try{
        $submit = $this -> licenciePdo ->prepare ("SELECT * FROM licencies WHERE licencie_id = ?");
        $submit ->execute([$licencie_id]);
        $row = $submit ->fetch (PDO::FETCH_ASSOC);
        if ($row){
            return new licencieModel ($row ['licencie_id'], $row ['nom'], $row ['prenom'], $row ['contact_id']);
        }else{
            return null;
        }
    }
    catch (PDOException $e){
        return null;
    }
}

public function getAll($licencie_id){
    try{
        $submit = $this -> licenciePdo ->query ("SELECT * FROM licencies");
        $licencies = [];
        while ($row = $submit ->fetch (PDO::FETCH_ASSOC)){
            $licencies[] = new licencieModel ($row ['licencie_id'], $row ['nom'], $row ['prenom'], $row ['contact_id']);
        }
        return $licencies;
    }
    catch (PDOException $e){
        return null;
    }
}

public function update (licencieModel $licencie){
    try{
        $submit = $this -> licenciePdo -> prepare ("UPDATE licencies SET licencie_id = ?, nom = ?, prenom =?, contact_id = ? WHERE licencie_id = ?");

        $submit -> execute ([$licencie ->getLicencie_id(), $licencie ->getNom(), $licencie ->getPrenom(), $licencie ->getContact_id()]);

        return true;
    }
    catch (PDOException $e){
        return false;
    }
}

public function deleteById($licencie_id){
    try{
        $submit = $this -> licenciePdo ->prepare ("DELETE FROM licencies WHERE licencie_id = ?");
        $submit ->execute([$licencie_id]);
            return true;
        }
        catch (PDOException $e){
            return false;
    }
}
}