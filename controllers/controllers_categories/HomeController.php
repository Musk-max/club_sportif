<?php
class HomeController{
    private $categorieDAO;
    public function __construct(CategorieDAO $categorieDAO)
    {
        $this->categorieDAO = $categorieDAO;
    }
    public function index(){
        //Récupérer la liste de toutes les categories depuis categorieDAO
        $categories = $this->categorieDAO->getAll();
        //inclure la vue pour afficher la liste des categories 
        include('../../views/views_categories/home.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/categorieModel.php");
require_once("../../classes/dao/categorieDAO.php");
$categorieDAO = new categorieDAO($pdo);
$controller = new HomeController($categorieDAO);
$controller -> index();
?>