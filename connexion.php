<?php
// Assurez-vous d'avoir une connexion à la base de données configurée
$dsn = 'mysql:host=localhost;dbname=club_sportif';
$user = 'root';
$password = '';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

// Variables du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$email = $_POST['email'];
$mdp = $_POST['mdp'];

// Requête SQL
$query = "SELECT * FROM educateurs WHERE email = :email AND mdp = :mdp";
$stmt = $db->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':mdp', $mdp);
$stmt->execute();

// Récupération du résultat
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérification des identifiants
if ($user) {
    // Les identifiants sont valides
    echo "Connexion réussie !";
   // header("Location:views/views_categories/home.php");
} else {
    // Identifiants invalides
    echo "Identifiants incorrects.";
}
}
?>