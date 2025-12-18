<?php
session_start();

// Vérification de la session
if (!isset($_SESSION['CONNECT']) || $_SESSION['CONNECT'] != 'OK') {
    header('Location: login.php?error=2');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Accueil</h1>
    <p>Hello <?php echo htmlspecialchars($_SESSION['login']); ?></p>
    
    <p>
        <a href="validation.php?afaire=deconnexion">Déconnexion</a>
    </p>
</body>
</html>