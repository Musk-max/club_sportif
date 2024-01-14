<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>Détails d'educateur</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> Détails d'educateur</h1>
    <a href = "HomeController.php">Retour à la liste des educateurs</a>
    <form action = "../../controllers/controllers_educateurs/AddEducateurController.php" method = "post">
    <label for = "email"> Email: </label><br>
    <input type = "text" id = "email" name = "email" required><br>
    <label for = "mdp"> Mdp: </label> <br>
    <input type = "text" id = "mdp" name = "mdp" required><br>
    <input type = "submit" name = "action" value = "Ajouter"> 
    </form> 
</body>
</html>