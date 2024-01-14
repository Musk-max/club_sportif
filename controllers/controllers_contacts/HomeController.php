<?php
class HomeController{
    private $contactDAO;
    public function __construct(ContactDAO $contactDAO)
    {
        $this->contactDAO = $contactDAO;
    }
    public function index(){
        //Récupérer la liste de toutes les contacts depuis contactDAO
        $contacts = $this->contactDAO->getAll();
        //inclure la vue pour afficher la liste des contacts 
        include('../../views/views_contacts/home.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/contactModel.php");
require_once("../../classes/dao/contactDAO.php");
$contactDAO = new contactDAO($pdo);
$controller = new HomeController($contactDAO);
$controller -> index();
?>