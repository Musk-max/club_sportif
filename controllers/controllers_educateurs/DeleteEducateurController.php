<?php

require_once("../../config/config.php");
require_once("../../classes/models/educateurModel.php");
require_once("../../classes/dao/educateurDAO.php");
$educateurDAO = new EducateurDAO($pdo);
$controller = new DeleteEducateurController($educateurDAO);
if(isset($_GET['educateur_id'])){
    //    $controller->index();
    var_dump($_GET);
$controller->delete_educateur($_GET['educateur_id']);

    }else{

        header('Location: HomeController.php');

             }
class DeleteEducateurController{
    private $educateurDAO;
    public function __construct(EducateurDAO $educateurDAO){
        $this->educateurDAO = $educateurDAO;
    }

public function delete_educateur($id){
    if($this->educateurDAO->deleteById($id)){
        //Rediriger vers la page de détails de l'éducateur après modification
        header('Location: HomeController.php');
        exit;
    }else{
    echo "cet éducateur n'a pas été suprimé ";
}
}

}
?>