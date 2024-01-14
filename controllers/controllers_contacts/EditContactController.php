<?php


require_once("../../config/config.php");
require_once("../../classes/models/contactModel.php");
require_once("../../classes/dao/contactDAO.php");
$contactDAO = new ContactDAO($pdo);
$controller = new EditContactController($contactDAO);
if(isset($_POST['modifier'])){
    //    $controller->index();
$controller->edit_contact($_POST['id']);

    }else{

        header('Location: HomeController.php');

             }


class EditContactController{
    private $contactDAO;
    public function __construct(ContactDAO $contactDAO){
        $this->contactDAO = $contactDAO;
    }
    public function edit_contact($contact_id){
        //Récupérer le contact à modifier par sa categorie_id

       
                //Récupérer les données du formulaire
            $contact = $this->contactDAO->getById($contact_id);
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $numero = $_POST['numero'];
            //Valider les données du formulaire (ajouter des validation si nécessaire)
            //Mettre à jour les détails de contact
            $contact->setNom($nom);
            $contact->setPrenom($prenom);
            $contact->setEmail($email);
            $contact->setNumero($numero);
            //Appeler la méthode de ContactDAO pour mettre à jour le contact dans la base de données
            if($this->contactDAO->update($contact)){
                //Rediriger vers la page de détails de contact après modification
                header('Location: HomeController.php');
                exit;
            }else{
            echo "ce contact n'a pas été enregistré ";
        }
        //inclure la vue pour afficher le formulaire de modification de contact
    }}

?>