<?php
session_start();
require_once 'config.php';

// Gestion de la déconnexion
if (isset($_GET['afaire']) && $_GET['afaire'] == 'deconnexion') {
    session_destroy();
    header('Location: login.php?error=3');
    exit();
}

// Vérification des données du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = isset($_POST['login']) ? trim($_POST['login']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    // Vérification si les champs sont vides
    if (empty($login) || empty($password)) {
        header('Location: login.php?error=1');
        exit();
    }
    
    // Vérification des identifiants
    if ($login == USERLOGIN && $password == USERPASS) {
        // Création de la session
        $_SESSION['CONNECT'] = 'OK';
        $_SESSION['login'] = $login;
        $_SESSION['password'] = $password;
        
        // Redirection vers la page d'accueil
        header('Location: accueil.php');
        exit();
    } else {
        // Identifiants incorrects
        header('Location: login.php?error=2');
        exit();
    }
}
?>