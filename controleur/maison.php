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
include("modele/nouvellePiece.php");
include("modele/nouvelAppareil.php");

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
            if(isset($_POST['nomMaison']) && isset($_POST['codeP']) && isset($_POST['nomRue']) && isset($_POST['numero']) && isset($_POST['evaluation']) && isset($_POST['degreIso'])){
                nouvelle_maison($_POST['nomMaison'], $_POST['codeP'], $_POST['nomRue'], $_POST['numero'], $_POST['evaluation'],$_SESSION['id_connect'],$_POST['degreIso']);
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
    case 'nouvelAppareil':
        if(!(isset($_SESSION['id_connect']))){
            $vue = "connexion";
            $title = "Connexion";
        }else{
            //test si les champs sont set
            if(isset($_POST['nomAppareil']) && isset($_POST['typeAppareil']) && isset($_POST['desc']) && isset($_POST['idPiece'])){
                nouvel_Appareil($_POST['nomAppareil'],$_POST['typeAppareil'],$_POST['desc'],$_POST['idPiece']);
                $vue = "tableau_de_bord";
                $title = "Tableau";
            }else{
                $vue = "ajout_appareil";
                $title = "Ajout appareil";
            }
        }
        break;
    case 'nouvellePiece':
        if(!(isset($_SESSION['id_connect']))){
                $vue = "connexion";
                $title = "Connexion";
            }else{
                //test si les champs sont set
                if(isset($_POST['nomPiece']) && isset($_POST['typePiece']) && isset($_POST['idAppart'])){
                    nouvelle_Piece($_POST['nomPiece'], $_POST['idAppart'], $_POST['typePiece']);
                    $vue = "tableau_de_bord";
                    $title = "Tableau";
                }else{
                    $vue = "ajout_piece";
                    $title = "Ajout piece";
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
