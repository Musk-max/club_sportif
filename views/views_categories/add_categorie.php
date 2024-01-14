<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>Détails de categorie</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> Détails de categorie</h1>
    <a href = "HomeController.php">Retour à la liste des categories</a>
    <form action = "../../controllers/controllers_categories/AddCategorieController.php" method = "post">
    <label for = "code_raccourci">Code_raccourci:</label><br>
    <input type = "text" id = "code_raccourci" name = "code_raccourci" required><br>
    <label for = "nom">Nom:</label> <br>
    <input type = "text" id = "nom" name = "nom" required><br>
    <input type = "submit" name = "action" value = "Ajouter"> 
    </form> 
</body>
</html>