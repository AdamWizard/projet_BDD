<?php

include("modele/connexionBDD.php");

function inscription($prenom, $nom, $dateNaiss, $mail, $tel, $mdp, $genre){
    echo("$prenom, $nom, $dateNaiss, $mail, $tel, $mdp, $genre");
    $date = date("Y-m-d");
    mysqli_query($_SESSION['bdd'],"INSERT INTO Utilisateur VALUES (NULL, 0, '$prenom', '$nom', 1, '$tel', '$dateNaiss', '$mail', '$date', $genre, '$mdp')");
    if(mysqli_insert_id($_SESSION['bdd'])!=0){
        $_SESSION['id_connect']=mysqli_insert_id($_SESSION['bdd']);
    }
}