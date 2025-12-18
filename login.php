<?php
session_start();

// Messages d'erreur
$messages = [
    1 => 'Veuillez saisir un login et un mot de passe',
    2 => 'Erreur de login/mot de passe',
    3 => 'Vous avez été déconnecté du service'
];

// Afficher le message d'erreur si présent
if (isset($_GET['error'])) {
    $error = intval($_GET['error']);
    if (isset($messages[$error])) {
        echo '<p style="color: red;">' . $messages[$error] . '</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="validation.php" method="post">
        <div>
            <label for="login">Login :</label>
            <input type="text" id="login" name="login" required>
        </div>
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Se connecter">
        </div>
    </form>
</body>
</html>