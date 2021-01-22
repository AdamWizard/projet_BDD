<?php

/**
 * Le contrôleur :
 * - définit le contenu des variables à afficher
 * - identifie et appelle la vue
 */ 

/**
 * Contrôleur maison
 */
include("modele/nouvelleMaison.php");
include("modele/nouvelAppart.php");

// si la fonction n'est pas définie, on choisit d'afficher l'accueil
if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
    $function = "accueil";
} else {
    $function = $_GET['fonction'];
}

switch ($function) {
    
    case 'formulaire':
        if(!(isset($_SESSION['id_connect']))){
            $vue = "connexion";
            $title = "Connexion";
        }else{
            //test si les champs sont set
            if(isset($_POST['nomMaison']) && isset($_POST['codeP']) && isset($_POST['nomRue']) && isset($_POST['numero']) && isset($_POST['evaluation'])){
                nouvelle_maison($_POST['nomMaison'], $_POST['codeP'], $_POST['nomRue'], $_POST['numero'], $_POST['evaluation'],$_SESSION['id_connect']);
                $vue = "tableau_de_bord";
                $title = "Tableau";
            }else{
                $vue = "ajout_maison";
                $title = "Ajout maison";
            }
        }
        break;
    case 'nouvelAppart':
        if(!(isset($_SESSION['id_connect']))){
            $vue = "connexion";
            $title = "Connexion";
        }else{
            //test si les champs sont set
            if(isset($_POST['NumAppart']) && isset($_POST['typeApp']) && isset($_POST['secuApp']) && isset($_POST['idMaison'])){
                nouvel_appart($_POST['NumAppart'], 1, $_POST['typeApp'], $_POST['secuApp'], $_POST['idMaison']);
                $vue = "tableau_de_bord";
                $title = "Tableau";
            }else{
                $vue = "ajout_appartement";
                $title = "Ajout appartement";
            }
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
