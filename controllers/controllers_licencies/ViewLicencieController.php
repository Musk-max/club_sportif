<?php
class ViewLicencieController{
    private $licencieDAO;
    public function __construct(LicencieDAO $licencieDAO){
        $this->licencieDAO = $licencieDAO;
    }
    public function view_licencie($licencieLicencie_id){
        // Récupérer le licencie à afficher par licencie_id
        $licencie = $this->licencieDAO->getById($licencieLicencie_id);
        //Inclure la vue pour afficher les détails de licencie
        include('../../views/views_licencies/view_licencie.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/licencieModel.php");
require_once("../../classes/dao/licencieDAO.php");
$licencieDAO = new LicencieDAO($pdo);
$controller = new ViewLicencieController($licencieDAO);
$controller -> view_licencie($_GET['licencie_id']);
?>