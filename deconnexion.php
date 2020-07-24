<?php 
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('username', '');
setcookie('password', '');

// Redirection vers l'index
header("Location:index.php");
exit;
?>