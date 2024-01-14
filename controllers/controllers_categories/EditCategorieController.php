<?php


require_once("../../config/config.php");
require_once("../../classes/models/categorieModel.php");
require_once("../../classes/dao/categorieDAO.php");
$categorieDAO = new CategorieDAO($pdo);
$controller = new EditCategorieController($categorieDAO);
if(isset($_POST['modifier'])){
    //    $controller->index();
$controller->edit_categorie($_POST['id']);

    }else{

        header('Location: HomeController.php');

             }


class EditCategorieController{
    private $categorieDAO;
    public function __construct(CategorieDAO $categorieDAO){
        $this->categorieDAO = $categorieDAO;
    }
    public function edit_categorie($categorie_id){
        //Récupérer la categorie à modifier par sa categorie_id

       
                //Récupérer les données du formulaire
            $categorie = $this->categorieDAO->getById($categorie_id);
            $code_raccourci = $_POST['code_raccourci'];
            $nom = $_POST['nom'];
            //Valider les données du formulaire (ajouter des validation si nécessaire)
            //Mettre à jour les détails de categorie
            $categorie->setCode_raccourci($code_raccourci);
            $categorie->setNom($nom);
            //Appeler la méthode du CategorieDAO pour mettre à jour le categorie dans la base de données
            if($this->categorieDAO->update($categorie)){
                //Rediriger vers la page de détails de categorie après modification
                header('Location: HomeController.php');
                exit;
            }else{
            echo "cette catégorie n'a pas été enregistrée ";
        }
        //inclure la vue pour afficher le formulaire de modification de categorie
    }}

?>