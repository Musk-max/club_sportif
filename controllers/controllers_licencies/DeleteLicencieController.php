<?php

require_once("../../config/config.php");
require_once("../../classes/models/licencieModel.php");
require_once("../../classes/dao/licencieDAO.php");
$licencieDAO = new LicencieDAO($pdo);
$controller = new DeleteLicencieController($licencieDAO);
if(isset($_GET['licencie_id'])){
    //    $controller->index();
    var_dump($_GET);
$controller->delete_licencie($_GET['licencie_id']);

    }else{

        header('Location: HomeController.php');

             }
class DeleteLicencieController{
    private $licencieDAO;
    public function __construct(LicencieDAO $licencieDAO){
        $this->licencieDAO = $licencieDAO;
    }

public function delete_licencie($id){
    if($this->licencieDAO->deleteById($id)){
        //Rediriger vers la page de détails de licencie après modification
        header('Location: HomeController.php');
        exit;
    }else{
    echo "ce licencie n'a pas été suprimé ";
}
}

}
?>