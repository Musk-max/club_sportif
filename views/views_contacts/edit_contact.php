
<?php
require_once("../../config/config.php");
require_once("../../classes/models/contactModel.php");
require_once("../../classes/dao/contactDAO.php");
$contactDAO = new ContactDAO($pdo);
$contact= $contactDAO->getById($_GET['contact_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>modifier contact</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> modifier contact</h1>
    <a href = "../../controllers/controllers_contacts/HomeController.php">Retour à la liste des contacts</a>
    <form action = "../../controllers/controllers_contacts/EditContactController.php" method = "post">
    <label for = "nom">Nom:</label>
    <input type = "text" id = "nom" name="nom" value = "<?php echo $contact->getNom(); ?>" required><br>
    <label for = "prenom">Prenom:</label>
    <input type = "text" id = "prenom" name = "prenom" value = "<?php echo $contact->getPrenom(); ?>" required><br>
    <label for = "email">Email:</label>
    <input type = "text" id = "email" name = "email" value = "<?php echo $contact->getEmail();?>" required><br>
    <label for = "numero">Numero:</label>
    <input type = "text" id = "numero" name = "numero" value = "<?php echo $contact->getNumero();?>" required><br>
    <input type = "text" id = "id" name="id" value = "<?php echo $contact->getContact_id(); ?>" hidden><br>

    <input type = "submit" name = "modifier" value = "Modifier"> 
    </form> 
   
</body>
</html>