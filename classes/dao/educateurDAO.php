<?php
class EducateurDAO{
    private $educateurPdo;
    public function __construct (PDO $educateurPdo){
        $this -> educateurPdo = $educateurPdo;

    }
public function create (educateurModel $educateur){
    try{
        $submit = $this -> educateurPdo -> prepare ("INSERT INTO educateurs(educateur_id,email, mdp) VALUES (?, ?, ?)");

        $submit -> execute ([$educateur ->getEducateur_id(), $educateur ->getEmail(), $educateur ->getMdp()]);

        return true;
    }
    catch (PDOException $e){
        return false;
    }
}

public function getById($educateur_id){
    try{
        $submit = $this -> educateurPdo ->prepare ("SELECT * FROM educateurs WHERE educateur_id = ?");
        $submit ->execute([$educateur_id]);
        $row = $submit ->fetch (PDO::FETCH_ASSOC);
        if ($row){
            return new educateurModel ($row ['educateur_id'], $row ['email'], $row ['mdp']);
        }else{
            return null;
        }
    }
    catch (PDOException $e){
        return null;
    }
}

public function getAll($educateur_id){
    try{
        $submit = $this -> educateurPdo ->query ("SELECT * FROM educateurs");
        $educateurs = [];
        while ($row = $submit ->fetch (PDO::FETCH_ASSOC)){
            $ceducateurs[] = new educateurModel ($row ['educateur_id'], $row ['email'], $row ['mdp']);
        }
        return $educateurs;
    }
    catch (PDOException $e){
        return [];
    }
}

public function update (educateurModel $educateur){
    try{
        $submit = $this -> educateurPdo -> prepare ("UPDATE educateurs SET educateur_id = ?, email = ?, mdp = ? WHERE educateur_id = ?");

        $submit -> execute ([$educateur ->getEducateur_id(), $educateur ->getEmail(), $educateur ->getMdp()]);

        return true;
    }
    catch (PDOException $e){
        return false;
    }
}

public function deleteById($educateur_id){
    try{
        $submit = $this -> educateurPdo ->prepare ("DELETE FROM educateurs WHERE educateur_id = ?");
        $submit ->execute([$educateur_id]);
            return true;
        }
        catch (PDOException $e){
            return false;
    }
}
}