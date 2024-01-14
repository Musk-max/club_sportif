<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>Détails de licencie</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> Détails de licencie</h1>
    <a href = "HomeController.php">Retour à la liste des licencies</a>
    <form action = "../../controllers/controllers_licencies/AddLicencieController.php" method = "post">
    <label for = "nom">Nom:</label><br>
    <input type = "text" id = "nom" name = "nom" required><br>
    <label for = "prenom">Prenom:</label> <br>
    <input type = "text" id = "prenom" name = "prenom" required><br>
    <label for = "contact_id">Contact_id</label><br>
    <input type = "text" id = "contact_id" name = "contact_id" required><br>
    <input type = "submit" name = "action" value = "Ajouter"> 
    </form> 
</body>
</html>