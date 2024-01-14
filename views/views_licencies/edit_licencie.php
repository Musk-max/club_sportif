
<?php
require_once("../../config/config.php");
require_once("../../classes/models/licencieModel.php");
require_once("../../classes/dao/licencieDAO.php");
$licencieDAO = new LicencieDAO($pdo);
$licencie= $licencieDAO->getById($_GET['licencie_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>modifier licencie</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> modifier licencie</h1>
    <a href = "../../controllers/controllers_licencies/HomeController.php">Retour à la liste des licencies</a>
    <form action = "../../controllers/controllers_licencies/EditLicencieController.php" method = "post">
    <label for = "nom">Nom:</label>
    <input type = "text" id = "nom" name="nom" value = "<?php echo $licencie->getNom();?>" required><br>
    <label for = "nom">Prenom:</label>
    <input type = "text" id = "prenom" name = "prenom" value = "<?php echo $licencie->getPrenom();?>" required><br>
    <label for = "nom">Contact_id:</label>
    <input type = "text" id = "contact_id" name="contact_id" value = "<?php echo $licencie->getContact_id();?>" required><br>
    <input type = "text" id = "id" name="id" value = "<?php echo $licencie->getLicencie_id();?>" hidden><br>

    <input type = "submit" name = "modifier" value = "Modifier"> 
    </form> 
   
</body>
</html>