<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>supprimer categorie</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> supprimer categorie</h1>
    <a href = "HomeController.php">Retour à la liste des categories</a>
    <?php if ($categorie): ?>
        <p> voulez-vous vraiment supprimer la categorie? "<?php echo $categorie -> getCode_raccourci(); ?> <?php echo $categorie -> getNom(); ?>" ? </p>
        <form action = "DeleteCategorieController.php? categorie_id = <?php echo $categorie -> getCategorie_id(); ?>" method = "post">
            <input type = "submit" name = "action" value = "oui supprimer"> 
        </form> 
    <?php else: ?>
        <p>la categorie n'a pas été trouvée</p>
    <?php endif; ?>
</body>
</html>