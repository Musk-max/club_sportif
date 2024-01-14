<?php
class AddContactController{
    private $contactDAO;
    public function __construct(ContactDAO $contactDAO){
        $this->contactDAO = $contactDAO;
    }
    public function index(){
        include('../../views/views_contacts/add_contact.php');
    }
    public function add_contact(){
        if(!isset ($POST['action'])){
            //Récuperer les données du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $numero = $_POST['numero'];
            var_dump($_POST);

            //Ajouter des validations si nécessaires
            //Créer un nouveau contact avec les données si elles sont validées
            $nouveauContact = new ContactModel (0, $nom, $prenom, $email, $numero);
            var_dump($nouveauContact);
            //Appeler la méthode de ContactDAO pour ajouter le contact
            if($this->contactDAO->create($nouveauContact)){
                //Rediriger vers la page d'acceuil après ajout
                header('Location: HomeController.php');
                exit();
            }else{
                echo"Erreur lors de l'ajout du contact";
            }
        }
        //inclure la vue pour afficher le formulaire d'ajout du contact
        include('../../views/views_contacts/add_contact.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/contactModel.php");
require_once("../../classes/dao/contactDAO.php");
$contactDAO = new ContactDAO($pdo);
$controller = new AddContactController($contactDAO);
if(!isset ($POST['action'])){
//    $controller->index();
$controller->add_contact();

}else{
    $controller->index();}
?>