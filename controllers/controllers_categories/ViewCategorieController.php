<?php
class ViewCategorieController{
    private $categorieDAO;
    public function __construct(CategorieDAO $categorieDAO){
        $this->categorieDAO = $categorieDAO;
    }
    public function view_categorie($categorieCategorie_id){
        // Récupérer la categorie à afficher par sa categorie_id
        $categorie = $this->categorieDAO->getById($categorieCategorie_id);
        //Inclure la vue pour afficher les détails de categorie
        include('../../views/views_categories/view_categorie.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/categorieModel.php");
require_once("../../classes/dao/categorieDAO.php");
$categorieDAO = new CategorieDAO($pdo);
$controller = new ViewCategorieController($categorieDAO);
$controller -> view_categorie($_GET['categorie_id']);
?>