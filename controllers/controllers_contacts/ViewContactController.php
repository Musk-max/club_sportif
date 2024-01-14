<?php
class ViewContactController{
    private $contactDAO;
    public function __construct(ContactDAO $contactDAO){
        $this->contactDAO = $contactDAO;
    }
    public function view_contact($contactContact_id){
        // Récupérer le contact à afficher par contact_id
        $contact = $this->contactDAO->getById($contactContact_id);
        //Inclure la vue pour afficher les détails du contact
        include('../../views/views_contacts/view_contact.php');
    }
}
require_once("../../config/config.php");
require_once("../../classes/models/contactModel.php");
require_once("../../classes/dao/contactDAO.php");
$contactDAO = new ContactDAO($pdo);
$controller = new ViewContactController($contactDAO);
$controller -> view_contact($_GET['contact_id']);
?>