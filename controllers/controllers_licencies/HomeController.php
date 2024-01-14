<?php
class HomeController{
    private $licencieDAO;
    public function __construct(LicencieDAO $licencieDAO)
    {
        $this->licencieDAO = $licencieDAO;
    }
    public function index(){
        //Récupérer la liste de toutes les licencies depuis licencieDAO
        $licencies = $this->licencieDAO->getAll();
        //inclure la vue pour afficher la liste des licencies 
        include('../../views/views_licencies/home.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/licencieModel.php");
require_once("../../classes/dao/licencieDAO.php");
$licencieDAO = new licencieDAO($pdo);
$controller = new HomeController($licencieDAO);
$controller -> index();
?>