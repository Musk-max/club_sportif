<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>supprimer educateur</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> supprimer educateur</h1>
    <a href = "HomeController.php">Retour à la liste des educateurs</a>
    <?php if ($educateur):?>
        <p> voulez-vous vraiment supprimer l'éducateur? "<?php echo $educateur->getEmail();?><?php echo $educateur->getMdp();?>"?</p>
        <form action = "DeleteEducateurController.php? educateur_id = <?php echo $educateur->getEducateur_id();?>" method = "post">
            <input type = "submit" name = "action" value = "oui supprimer"> 
        </form> 
    <?php else:?>
        <p>l'éducateur n'a pas été trouvé</p>
    <?php endif;?>
</body>
</html>