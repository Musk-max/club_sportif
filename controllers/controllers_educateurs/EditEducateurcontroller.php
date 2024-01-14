<?php


require_once("../../config/config.php");
require_once("../../classes/models/educateurModel.php");
require_once("../../classes/dao/educateurDAO.php");
$educateurDAO = new EducateurDAO($pdo);
$controller = new EditEducateurController($educateurDAO);
if(isset($_POST['modifier'])){
    //    $controller->index();
$controller->edit_educateur($_POST['id']);

    }else{

        header('Location: HomeController.php');

             }


class EditEducateurController{
    private $educateurDAO;
    public function __construct(EducateurDAO $educateurDAO){
        $this->educateurDAO = $educateurDAO;
    }
    public function edit_educateur($educateur_id){
        //Récupérer la categorie à modifier par son educateur_id

       
                //Récupérer les données du formulaire
            $educateur = $this->educateurDAO->getById($educateur_id);
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            //Valider les données du formulaire (ajouter des validation si nécessaire)
            //Mettre à jour les détails de l'éducateur
            $educateur->setEmail($email);
            $educateur->setMdp($mdp);
            //Appeler la méthode EducateurDAO pour mettre à jour l'éducateur dans la base de données
            if($this->educateurDAO->update($educateur)){
                //Rediriger vers la page de détails de l'éducateur après modification
                header('Location: HomeController.php');
                exit;
            }else{
            echo "cet éducateur n'a pas été enregistré ";
        }
        //inclure la vue pour afficher le formulaire de modification de l'éducateur
    }}

?>