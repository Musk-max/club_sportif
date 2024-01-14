<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>Détails de contact</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> Détails de contact</h1>
    <a href = "HomeController.php">Retour à la liste des contacts</a>
    <form action = "../../controllers/controllers_contacts/AddContactController.php" method = "post">
    <label for = "nom">Nom:</label><br>
    <input type = "text" id = "nom" name = "nom" required><br>
    <label for = "nom">Prenom:</label> <br>
    <input type = "text" id = "prenom" name = "prenom" required><br>
    <label for = "email">Email:</label><br>
    <input type = "text" id = "email" name = "email" required><br>
    <label for = "numero">Numero:</label><br>
    <input type = "text" id = "numero" name = "numero" required><br>
    <input type = "submit" name = "action" value = "Ajouter"> 
    </form> 
</body>
</html>