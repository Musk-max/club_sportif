<?php
class HomeController{
    private $educateurDAO;
    public function __construct(EducateurDAO $educateurDAO)
    {
        $this->educateurDAO = $educateurDAO;
    }
    public function index(){
        //Récupérer la liste de toutes les educateurs depuis educateurDAO
        $educateurs = $this->educateurDAO->getAll();
        //inclure la vue pour afficher la liste des educateurs 
        include('../../views/views_educateurs/home.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/educateurModel.php");
require_once("../../classes/dao/educateurDAO.php");
$educateurDAO = new educateurDAO($pdo);
$controller = new HomeController($educateurDAO);
$controller -> index();
?>