<?php
class AdminDAO{
    private $adminPdo;
    public function __construct (PDO $adminPdo){
        $this -> adminPdo = $adminPdo;

    }
public function create (adminModel $admin){
    try{
        $submit = $this -> adminPdo -> prepare ("INSERT INTO admins(admin_id) VALUES (?)");

        $submit -> execute ([$admin ->getAdmin_id()]);

        return true;
    }
    catch (PDOException $e){
        return false;
    }
}

public function getById($admin_id){
    try{
        $submit = $this -> adminPdo ->prepare ("SELECT * FROM admins WHERE admin_id = ?");
        $submit ->execute([$admin_id]);
        $row = $submit ->fetch (PDO::FETCH_ASSOC);
        if ($row){
            return new adminModel ($row ['admin_id']);
        }else{
            return null;
        }
    }
    catch (PDOException $e){
        return null;
    }
}

public function getAll(){
    try{
        $submit = $this -> adminPdo ->query ("SELECT * FROM admins");
        $admins = [];
        while ($row = $submit ->fetch (PDO::FETCH_ASSOC)){
            $admins [] = new AdminModel($row ['admin_id']);
        }
        return $admins;
    }
    catch (PDOException $e){
        return [];
    }
}

public function update (adminModel $admin){
    try{
        $submit = $this -> adminPdo -> prepare ("UPDATE admins SET admin_id = ? WHERE admin_id = ?");

        $submit -> execute ([$admin ->getAdmin_id()]);

        return true;
    }
    catch (PDOException $e){
        return false;
    }
}

public function deleteById($admin_id){
    try{
        $submit = $this -> adminPdo ->prepare ("DELETE FROM admins WHERE admin_id = ?");
        $submit ->execute([$admin_id]);
            return true;
        }
        catch (PDOException $e){
            return false;
    }
}
}