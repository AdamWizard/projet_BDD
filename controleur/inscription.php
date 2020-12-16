<?php

if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
    $function = "afficher";
} else {
    $function = $_GET['fonction'];
}

switch ($function) {
    
    case 'afficher':
        //affichage de l'accueil
        $vue = "inscription";
        $title = "Inscription";
        break;
    default:
        // si aucune fonction ne correspond au paramètre function passé en GET
        $vue = "erreur404";
        $title = "error404";
        $message = "Erreur 404 : la page recherchée n'existe pas.";
}

include ('vue/header.php');
include ('vue/' . $vue . '.php');
include ('vue/footer.php');
