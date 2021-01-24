<?php

include("modele/connexionBDD.php");

function getAppartsDispo(){
    $idConnect = $_SESSION['id_connect'];
    $result = mysqli_query($_SESSION['bdd'],"SELECT * from Appartement inner join Maison on Appartement.id_maison = Maison.id_maison LEFT join (Select id_appartement as id from Louer where id_utilisateur=$idConnect) as Inter on Appartement.id_appartement = id where id IS NULL");
    return $result;
}

function nouvelleLoc($idAppart, $nbHabs){
    $idConnect = $_SESSION['id_connect'];
    $date = date("Y-m-d");
    mysqli_query($_SESSION['bdd'],"INSERT into Louer values($idConnect,$idAppart,NULL,'$date',$nbHabs)");
}
