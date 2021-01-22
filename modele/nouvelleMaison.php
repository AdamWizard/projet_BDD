<?php

include("modele/connexionBDD.php");

function nouvelle_maison($nomMaison, $codeP, $nomRue, $numero, $evaluation,$idCo,$degreIso){
    mysqli_query($_SESSION['bdd'],"INSERT INTO Maison VALUES (NULL, '$nomMaison', '$evaluation', '$nomRue', '$numero', $codeP,1,$degreIso)");
    if(mysqli_insert_id($_SESSION['bdd'])!=0){
        $date = date("Y-m-d");
        $idMais = mysqli_insert_id($_SESSION['bdd']);
        mysqli_query($_SESSION['bdd'],"INSERT INTO Posseder VALUES ($idCo, $idMais, NULL,'$date')");
    }
}

function listeCodes(){
    $result = mysqli_query($_SESSION['bdd'],"Select code_postal from Ville");
    return $result;
}

function getDegIso(){
    $result = mysqli_query($_SESSION['bdd'],"Select id_deg_iso,libelle from Degre_isolation");
    return $result;
}