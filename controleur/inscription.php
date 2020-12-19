<?php

include("modele/inscription.php");
if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
    $function = "afficher";
} else {
    $function = $_GET['fonction'];
}

switch ($function) {
    
    case 'afficher':
        if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['dateNaiss']) && isset($_POST['mail']) && isset($_POST['tel']) && isset($_POST['mdp']) && isset($_POST['mdp2']) && isset($_POST['genre'])){
            if($_POST['mdp']==$_POST['mdp2']){
                inscription($_POST['prenom'],$_POST['nom'],$_POST['dateNaiss'],$_POST['mail'],$_POST['tel'],$_POST['mdp'],$_POST['genre']);
                if(isset($_SESSION['id_connect'])){
                    $vue = "tableau_de_bord";
                    $title = "Tableau";
                }else{
                    //l'inscription a echouee
                    $vue = "inscription";
                    $title = "Inscription";
                }
            }else{
                //le mot de passe de confirmation est different
                $vue = "inscription";
                $title = "Inscription";
            }
        }else{
            //certains champs ne sont pas renseignes
            $vue = "inscription";
            $title = "Inscription";
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
