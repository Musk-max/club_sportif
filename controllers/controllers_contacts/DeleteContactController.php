<?php

require_once("../../config/config.php");
require_once("../../classes/models/contactModel.php");
require_once("../../classes/dao/contactDAO.php");
$contactDAO = new ContactDAO($pdo);
$controller = new DeleteContactController($contactDAO);
if(isset($_GET['contact_id'])){
    //    $controller->index();
    var_dump($_GET);
$controller->delete_contact($_GET['contact_id']);

    }else{

        header('Location: HomeController.php');

             }
class DeleteContactController{
    private $contactDAO;
    public function __construct(ContactDAO $contactDAO){
        $this->contactDAO = $contactDAO;
    }

public function delete_contact($id){
    if($this->contactDAO->deleteById($id)){
        //Rediriger vers la page de détails de contact après modification
        header('Location: HomeController.php');
        exit;
    }else{
    echo "ce contact n'a pas été suprimé ";
}
}

}
?>
