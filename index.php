<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/united/variables.css">
    <title>Login Form</title>
</head>
<body>
<?php include("partials/_header1.php");?>
    <h1>Login</h1>
    <form action="connexion.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="mdp">Password:</label>
        <input type="mdp" name="mdp" required>
        <br>
        <button type="submit">suivant</button>
    </form>
</body>
</html>