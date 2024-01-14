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
    <?php if ($categorie): ?>
        <p> <strong>Code_raccourci:</strong> <?php echo $categorie->getCode_raccourci();?></p>
        <p> <strong>Nom:</strong><?php echo $categorie->getNom();?></p>
    <?php else:?>
        <p>la categorie n'a pas été trouvée</p>
    <?php endif;?>
</body>
</html>