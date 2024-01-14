<?php
class ContactDAO{
    private $contactPdo;
    public function __construct(PDO $contactPdo){
        $this->contactPdo = $contactPdo;

    }
public function create(contactModel $contact){
    try{
        $submit = $this->contactPdo->prepare("INSERT INTO contacts(nom,prenom,email,numero)VALUES(?, ?, ?, ?)");

        $submit->execute([$contact->getNom(),$contact->getPrenom(),$contact->getEmail(),$contact->getNumero()]);

        return true;
    }
    catch(PDOException $e){
        return false;
    }
}

public function getById($contact_id){
    try{
        $submit = $this->contactPdo->prepare("SELECT*FROM contacts WHERE contact_id = ?");
        $submit->execute([$contact_id]);
        $row = $submit->fetch(PDO::FETCH_ASSOC);
        if($row){
            return new contactModel($row['contact_id'], $row['nom'], $row['prenom'], $row['email'], $row['numero']);
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
        $submit = $this->contactPdo->query("SELECT*FROM contacts");
        $contacts = [];
        while ($row = $submit->fetch (PDO::FETCH_ASSOC)){
            $contacts[] = new contactModel ($row['contact_id'], $row['nom'], $row['prenom'], $row['email'], $row['numero']);
        }
        return $contacts;
    }
    catch(PDOException $e){
        return[];
    }
}

public function update(contactModel $contact){
    try{
        $submit = $this->contactPdo->prepare ("UPDATE contacts SET nom=?, prenom=?, email=?, numero=? WHERE contact_id = ?");
        $submit->execute ([$contact->getNom(), $contact->getPrenom(), $contact->getEmail(), $contact->getNumero(), $contact->getContact_id()]);

        return true;
    }
    catch (PDOException $e){
        return false;
    }
}

public function deleteById($contact_id){
    try{
        $submit = $this->contactPdo->prepare("DELETE FROM contacts WHERE contact_id = ?");
        $submit->execute([$contact_id]);
            return true;
        }
        catch (PDOException $e){
            return false;
    }
}

}