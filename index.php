<?php

/**
 * MVC :
 * - index.php : identifie le routeur à appeler en fonction de l'url
 * - Contrôleur : Crée les variables, élabore leurs contenus, identifie la vue et lui envoie les variables
 * - Modèle : contient les fonctions liées à la BDD et appelées par les contrôleurs
 * - Vue : contient ce qui doit être affiché
 **/

// Activation des erreurs
ini_set('display_errors', 1);

// Appel des fonctions du contrôleur
include("controleur/fonctions.php");
// Appel des fonctions liées à l'affichage
include("vue/fonctions.php");
session_start();
// On identifie le contrôleur à appeler dont le nom est contenu dans cible passé en GET
if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    // Si la variable cible est passé en GET
    $url = $_GET['cible']; //profil, maison, Pièce, Appartement, ...etc.
    
} else {
    // Si aucun contrôleur défini en GET, on bascule sur utilisateurs
    $url = 'principal';
}

// On appelle le contrôleur
include('controleur/' . $url . '.php');