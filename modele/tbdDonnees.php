<?php

include("modele/connexionBDD.php");

function listeMaisonsProprio(){
    $idConnect = $_SESSION['id_connect'];
    $result = mysqli_query($_SESSION['bdd'],"Select * from Posseder inner join Maison on Posseder.id_maison = Maison.id_maison where id_utilisateur = $idConnect");
    return $result;
}



function listeAppartsMaison($idMaison){
    $result = mysqli_query($_SESSION['bdd'],"Select * from Appartement natural join Degre_citoyennete natural join Type_appartement natural join Degre_securite");
    return $result;
}

function listeAppareilsAppart($idAppart){
    $result = mysqli_query($_SESSION['bdd'],"Select code_postal from Ville");
    return $result;
}

