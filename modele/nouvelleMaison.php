<?php

include("modele/connexionBDD.php");

function nouvelle_maison($nomMaison, $codeP, $nomRue, $numero, $evaluation,$idCo){
    mysqli_query($_SESSION['bdd'],"INSERT INTO Maison VALUES (NULL, '$nomMaison', '$evaluation', '$nomRue', '$numero', $codeP,1,1)");
    if(mysqli_insert_id($_SESSION['bdd'])!=0){
        $date = date("Y-m-d");
        $idMais = mysqli_insert_id($_SESSION['bdd']);
        mysqli_query($_SESSION['bdd'],"INSERT INTO Posseder VALUES ($idCo, $idMais, NULL,'$date')");
    }
}