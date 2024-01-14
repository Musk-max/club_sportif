<?php
class AddLicencieController{
    private $licencieDAO;
    public function __construct(LicencieDAO $licencieDAO){
        $this->licencieDAO = $licencieDAO;
    }
    public function index(){
        include('../../views/views_licencies/add_licencie.php');
    }
    public function add_licencie(){
        if(!isset ($POST['action'])){
            //Récuperer les données du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $contact_id = $_POST['contact_id'];
            var_dump($_POST);

            //Ajouter des validations si nécessaires
            //Créer un nouveau licencie avec les données si elles sont validées
            $nouveauLicencie = new LicencieModel (0, $nom, $prenom, $contact_id);
            var_dump($nouveauLicencie);
            //Appeler la méthode de LicencieDAO pour ajouter le licencie
            if($this->licencieDAO->create($nouveauLicencie)){
                //Rediriger vers la page d'acceuil après ajout
                header('Location: HomeController.php');
                exit();
            }else{
                echo"Erreur lors de l'ajout du licencie";
            }
        }
        //inclure la vue pour afficher le formulaire d'ajout du licencie
        include('../../views/views_licencies/add_licencie.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/licencieModel.php");
require_once("../../classes/dao/licencieDAO.php");
$licencieDAO = new LicencieDAO($pdo);
$controller = new AddLicencieController($licencieDAO);
if(!isset ($POST['action'])){
//    $controller->index();
$controller->add_licencie();

}else{
    $controller->index();}
?>