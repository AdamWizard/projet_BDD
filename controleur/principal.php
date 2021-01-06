<?php

/**
 * Le contrôleur :
 * - définit le contenu des variables à afficher
 * - identifie et appelle la vue
 */ 

/**
 * Contrôleur Principal
 */
include("modele/connexion.php");
// si la fonction n'est pas définie, on choisit d'afficher l'accueil
if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
    $function = "accueil";
} else {
    $function = $_GET['fonction'];
}

switch ($function) {
    case 'deconnexion':
        unset($_SESSION['id_connect']);
        $vue = "connexion";
        $title = "Connexion";
        break;
    case 'accueil':
        //affichage de l'accueil
        if(!(isset($_SESSION['id_connect']))){
            $vue = "connexion";
            $title = "Connexion";
            if(isset($_POST['mail']) && isset($_POST['mdp'])){
                $idUser = connexion($_POST['mail'],$_POST['mdp']);
                if($idUser!=0){
                    $_SESSION['id_connect']=$idUser;
                    $vue = "tableau_de_bord";
                    $title = "Tableau";
                    //tableau de bord
                }
            }
        }else{
            $vue = "tableau_de_bord";
            $title = "Tableau";
            //tableau de bord
        }
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
