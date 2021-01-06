<?php

include("modele/connexionBDD.php");

function connexion(string $mail, string $mdp){
    $query1 = "SELECT count(*) as count FROM Utilisateur where mail like '$mail' and mdp like '$mdp'";
    $result1=mysqli_query($_SESSION['bdd'], $query1);
    $row = $result1->fetch_assoc()['count'];
    if($row==1){
        $query2 = "SELECT id_utilisateur FROM Utilisateur where mail like '$mail' and mdp like '$mdp'";
        $result2 = mysqli_query($_SESSION['bdd'], $query2);
        $row2 = $result2->fetch_assoc()['id_utilisateur'];
        return $row2;
    }else{
        return 0;
    }
    
}