<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des educateurs</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1>liste des educateurs</h1>
    <a href = "../../views/views_educateurs/add_educateur.php">Ajouter un educateur</a>
    <?php if ((count ($educateurs)) > 0 ):?>
        <table>
            <thead>
                <tr>
                    <th>email</th>
                    <th>mdp</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($educateurs as $educateur):?>
                    <tr>
                        <td><?php echo $educateur->getEmail();?></td>
                        <td><?php echo $educateur->getMdp();?></td>
                        <td>
                            <a href = "ViewEducateurController.php?educateur_id=<?php echo $educateur->getEducateur_id() ?>">voir</a>
                            <a href = "../../views/views_educateurs/edit_educateur.php?educateur_id=<?php echo $educateur->getEducateur_id(); ?>">modifier</a>
                            <a href = "DeleteEducateurController.php?educateur_id=<?php echo $educateur->geteducateur_id(); ?>">supprimer</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    <?php else:?>
            <p>Aucune éducateur trouvé</p>
    <?php endif;?>
</body>
</html>