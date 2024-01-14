<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>Détails du licencie</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1>Détails du licencie</h1>
    <a href = "HomeController.php">Retour à la liste des licencies</a>
    <?php if($licencie): ?>
        <p> <strong>Nom:</strong><?php echo $licencie->getNom();?></p>
        <p> <strong>Prenom:</strong><?php echo $licencie->getPrenom();?></p>
        <p><strong>Contact_id:</strong><?php echo $licencie->getContact_id();?></p>
    <?php else:?>
        <p>le licencie n'a pas été trouvé</p>
    <?php endif;?>
</body>
</html>