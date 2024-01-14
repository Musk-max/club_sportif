<?php
class AddEducateurController{
    private $educateurDAO;
    public function __construct(EducateurDAO $educateurDAO){
        $this->educateurDAO = $educateurDAO;
    }
    public function index(){
        include('../../views/views_educateurs/add_educateur.php');
    }
    public function add_educateur(){
        if(!isset($POST['action'])){
            //Récuperer les données du formulaire
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
           // var_dump($_POST);

            //Ajouter des validations si nécessaires
            //Créer un nouveau éducateur avec les données si elles sont validées
            $nouveauEducateur = new EducateurModel (0, $email, $mdp);
           // var_dump($nouveauEducateur);
            //Appeler la méthode de EducateurDAO pour ajouter l'educateur
            if($this->educateurDAO->create($nouveauEducateur)){
                //Rediriger vers la page d'acceuil après ajout
                header('Location: HomeController.php');
                exit();
            }else{
                echo"Erreur lors de l'ajout de l'educateur";
            }
        }
        //inclure la vue pour afficher le formulaire d'ajout de l'éducateur
        include('../../views/views_educateurs/add_educateur.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/educateurModel.php");
require_once("../../classes/dao/educateurDAO.php");
$educateurDAO = new EducateurDAO($pdo);
$controller = new AddEducateurController($educateurDAO);
if(!isset ($POST['action'])){
//    $controller->index();
$controller->add_educateur();

}else{
    $controller->index();}
?>