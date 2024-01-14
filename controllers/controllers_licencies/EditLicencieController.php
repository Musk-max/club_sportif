<?php


require_once("../../config/config.php");
require_once("../../classes/models/licencieModel.php");
require_once("../../classes/dao/licencieDAO.php");
$licencieDAO = new LicencieDAO($pdo);
$controller = new EditLicencieController($licencieDAO);
if(isset($_POST['modifier'])){
    //    $controller->index();
$controller->edit_licencie($_POST['id']);

    }else{

        header('Location: HomeController.php');

             }


class EditLicencieController{
    private $licencieDAO;
    public function __construct(LicencieDAO $licencieDAO){
        $this->licencieDAO = $licencieDAO;
    }
    public function edit_licencie($licencie_id){
        //Récupérer le licencie à modifier par licencie_id

       
                //Récupérer les données du formulaire
            $licencie = $this->licencieDAO->getById($licencie_id);
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $contact_id = $_POST['contact_id'];
            //Valider les données du formulaire (ajouter des validation si nécessaire)
            //Mettre à jour les détails du licencie
            $licencie->setNom($nom);
            $licencie->setPrenom($prenom);
            $licencie->setContact_id($contact_id);
            //Appeler la méthode de LicencieDAO pour mettre à jour le licencie dans la base de données
            if($this->licencieDAO->update($licencie)){
                //Rediriger vers la page de détails du licencie après modification
                header('Location: HomeController.php');
                exit;
            }else{
            echo "ce licencie n'a pas été enregistré ";
        }
        //inclure la vue pour afficher le formulaire de modification du licencie
    }}

?>