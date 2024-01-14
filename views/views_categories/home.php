<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des categories</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1>liste des categories</h1>
    <a href = "../../views/views_categories/add_categorie.php">Ajouter une categorie</a>
    <?php if ((count ($categories)) > 0 ):?>
        <table>
            <thead>
                <tr>
                    <th>code_raccourci</th>
                    <th>nom</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $categorie):?>
                    <tr>
                        <td><?php echo $categorie->getCode_raccourci();?></td>
                        <td><?php echo $categorie->getNom();?></td>
                        <td>
                            <a href = "ViewCategorieController.php?categorie_id=<?php echo $categorie->getCategorie_id() ?>">voir</a>
                            <a href = "../../views/views_categories/edit_categorie.php?categorie_id=<?php echo $categorie->getCategorie_id(); ?>">modifier</a>
                            <a href = "DeleteCategorieController.php?categorie_id=<?php echo $categorie->getCategorie_id(); ?>">supprimer</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    <?php else:?>
            <p>Aucune catégorie trouvée</p>
    <?php endif;?>
</body>
</html>