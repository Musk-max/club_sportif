<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des licencies</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1>liste des licencies</h1>
    <a href = "../../views/views_licencies/add_licencie.php">Ajouter un licencie</a>
    <?php if ((count ($licencies)) > 0 ):?>
        <table>
            <thead>
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($licencies as $licencie):?>
                    <tr>
                        <td><?php echo $licencie->getNom();?></td>
                        <td><?php echo $licencie->getPrenom();?></td>
                        <td>
                            <a href = "ViewLicencieController.php?licencie_id=<?php echo $licencie->getLicencie_id() ?>">voir</a>
                            <a href = "../../views/views_licencies/edit_licencie.php?licencie_id=<?php echo $licencie->getLicencie_id(); ?>">modifier</a>
                            <a href = "DeleteLicencieController.php?licencie_id=<?php echo $licencie->getLicencie_id(); ?>">supprimer</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    <?php else:?>
            <p>Aucune licencié trouvé</p>
    <?php endif;?>
</body>
</html>