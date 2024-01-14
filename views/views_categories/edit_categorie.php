
<?php
require_once("../../config/config.php");
require_once("../../classes/models/categorieModel.php");
require_once("../../classes/dao/categorieDAO.php");
$categorieDAO = new CategorieDAO($pdo);
$categorie= $categorieDAO->getById($_GET['categorie_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>modifier categorie</title>
</head>
<body>
    <?php include("../../partials/_header.php");?> 
    <h1> modifier categorie</h1>
    <a href = "../../controllers/controllers_categories/HomeController.php">Retour à la liste des categories</a>
    <form action = "../../controllers/controllers_categories/EditCategorieController.php" method = "post">
    <label for = "code_raccourci"> Code_raccourci: </label>
    <input type = "text" id = "code_raccourci" name="code_raccourci" value = "<?php echo $categorie -> getCode_raccourci(); ?>" required><br>
    <label for = "nom"> Nom: </label>
    <input type = "text" id = "nom" name = "nom" value = "<?php echo $categorie -> getNom(); ?>" required><br>
    <input type = "text" id = "id" name="id" value = "<?php echo $categorie ->getCategorie_id(); ?>" hidden><br>

    <input type = "submit" name = "modifier" value = "Modifier"> 
    </form> 
   
</body>
</html>