<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des contacts</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
</head>
<body>
    <?php include("../../partials/_header.php");?>
    <h1>liste des contacts</h1>
    <a href = "../../views/views_contacts/add_contact.php">Ajouter un contact</a>
    <?php if ((count ($contacts)) > 0 ):?>
        <table>
            <thead>
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>email</th>
                    <th>numero</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact):?>
                    <tr>
                        <td><?php echo $contact->getNom();?></td>
                        <td><?php echo $contact->getPrenom();?></td>
                        <td><?php echo $contact->getEmail();?></td>
                        <td><?php echo $contact->getNumero();?></td>
                        <td>
                            <a href = "ViewContactController.php?contact_id=<?php echo $contact->getContact_id() ?>">voir</a>
                            <a href = "../../views/views_contacts/edit_contact.php?contact_id=<?php echo $contact->getContact_id(); ?>">modifier</a>
                            <a href = "DeleteContactController.php?contact_id=<?php echo $contact->getContact_id(); ?>">supprimer</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    <?php else:?>
            <p>Aucun contact trouvé</p>
    <?php endif;?>
</body>
</html>