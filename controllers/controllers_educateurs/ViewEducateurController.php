<?php
class ViewEducateurController{
    private $educateurDAO;
    public function __construct(EducateurDAO $educateurDAO){
        $this->educateurDAO = $educateurDAO;
    }
    public function view_educateur($educateurEducateur_id){
        // Récupérer l'éducateur à afficher par educateur_id
        $educateur = $this->educateurDAO->getById($educateurEducateur_id);
        //Inclure la vue pour afficher les détails de l'éducateur
        include('../../views/views_educateurs/view_educateur.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/educateurModel.php");
require_once("../../classes/dao/educateurDAO.php");
$educateurDAO = new EducateurDAO($pdo);
$controller = new ViewEducateurController($educateurDAO);
$controller -> view_educateur($_GET['educateur_id']);
?>