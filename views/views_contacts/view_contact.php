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
    <a href = "HomeController.php"> Retour à la liste des contacts </a>
    <?php if ($contact):?>
        <p> <strong>Nom:</strong> <?php echo $contact->getNom();?></p>
        <p> <strong>Prenom:</strong> <?php echo $contact->getPrenom();?></p>
        <p><strong>Email:</strong><?php echo $contact->getEmail();?></p>
        <p><strong>Numero:</strong><?php echo $contact->getNumero();?></p>
    <?php else:?>
        <p>le contact n'a pas été trouvé</p>
    <?php endif;?>
</body>
</html>