<?php

require_once("../../config/config.php");
require_once("../../classes/models/categorieModel.php");
require_once("../../classes/dao/categorieDAO.php");
$categorieDAO = new CategorieDAO($pdo);
$controller = new DeleteCategorieController($categorieDAO);
if(isset($_GET['categorie_id'])){
    //    $controller->index();
    var_dump($_GET);
$controller->delete_categorie($_GET['categorie_id']);

    }else{

        header('Location: HomeController.php');

             }
class DeleteCategorieController{
    private $categorieDAO;
    public function __construct(CategorieDAO $categorieDAO){
        $this-> categorieDAO = $categorieDAO;
    }

public function delete_categorie($id){
    if($this->categorieDAO->deleteById($id)){
        //Rediriger vers la page de détails de categorie après modification
        header('Location: HomeController.php');
        exit;
    }else{
    echo "cette catégorie n'a pas été suprimée ";
}
}

}
?>