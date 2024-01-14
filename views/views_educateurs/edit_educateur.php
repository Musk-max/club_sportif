
<?php
require_once("../../config/config.php");
require_once("../../classes/models/educateurModel.php");
require_once("../../classes/dao/educateurDAO.php");
$educateurDAO = new EducateurDAO($pdo);
$educateur= $educateurDAO->getById($_GET['educateur_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>modifier educateur</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> modifier educateur</h1>
    <a href = "../../controllers/controllers_educateurs/HomeController.php">Retour à la liste des educateurs</a>
    <form action = "../../controllers/controllers_educateurs/EditEducateurController.php" method = "post">
    <label for = "email"> Email: </label>
    <input type = "text" id = "email" name="email" value = "<?php echo $educateur->getEmail(); ?>" required><br>
    <label for = "mdp"> Mdp: </label>
    <input type = "text" id = "mdp" name = "mdp" value = "<?php echo $educateur->getMdp(); ?>" required><br>
    <input type = "text" id = "id" name="id" value = "<?php echo $educateur->getEducateur_id(); ?>" hidden><br>

    <input type = "submit" name = "modifier" value = "Modifier"> 
    </form> 
   
</body>
</html>