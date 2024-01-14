<?php
class AddCategorieController{
    private $categorieDAO;
    public function __construct(CategorieDAO $categorieDAO){
        $this->categorieDAO = $categorieDAO;
    }
    public function index(){
        include('../../views/views_categories/add_categorie.php');
    }
    public function add_categorie(){
        if(!isset ($POST['action'])){
            //Récuperer les données du formulaire
            $code_raccourci = $_POST ['code_raccourci'];
            $nom = $_POST ['nom'];
            var_dump($_POST);

            //Ajouter des validations si nécessaires
            //Créer une nouvelle catégorie avec les données si elles sont validées
            $nouveauCategorie = new CategorieModel (0, $code_raccourci, $nom);
            var_dump($nouveauCategorie);
            //Appeler la méthode de CategorieDAO pour ajouter la categorie
            if($this->categorieDAO->create($nouveauCategorie)){
                //Rediriger vers la page d'acceuil après ajout
                header('Location: HomeController.php');
                exit();
            }else{
                echo"Erreur lors de l'ajout du categorie";
            }
        }
        //inclure la vue pour afficher le formulaire d'ajout de categorie
        include('../../views/views_categories/add_categorie.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/categorieModel.php");
require_once("../../classes/dao/categorieDAO.php");
$categorieDAO = new CategorieDAO($pdo);
$controller = new AddCategorieController($categorieDAO);
if(!isset ($POST['action'])){
//    $controller->index();
$controller->add_categorie();

}else{
    $controller->index();}
?>