<?php 
class AdminModel{
    private $admin_id;

    public function __construct($admin_id){
        $this -> admin_id = $admin_id;
    }

    public function getAdmin_id(){
        return $this ->admin_id;
    }

    public function setAdmin_id ($admin_id){
        $this -> admin_id = $admin_id;
    }

}