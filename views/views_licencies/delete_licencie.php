<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>supprimer licencie</title>
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1> supprimer licencie</h1>
    <a href = "HomeController.php">Retour à la liste des licencies</a>
    <?php if ($licencie):?>
        <p> voulez-vous vraiment supprimer le licencie? "<?php echo $licencie->getNom();?><?php echo $licencie->getPrenom();?><?php echo $licencie->getContact_id();?>"?</p>
        <form action = "DeleteLicencieController.php? licencie_id =<?php echo $licencie->getLicencie_id();?>"method = "post">
            <input type = "submit" name = "action" value = "oui supprimer"> 
        </form> 
    <?php else:?>
        <p>le licencie n'a pas été trouvé</p>
    <?php endif;?>
</body>
</html>