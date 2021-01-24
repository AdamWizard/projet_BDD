<?php

include("modele/connexionBDD.php");
ini_set('display_errors',1);
error_reporting(E_ALL);

function allumer($idAppareil){
    $result1 = mysqli_query($_SESSION['bdd'],"SELECT allume from Appareil where id_appareil = $idAppareil");
    if($result1->fetch_assoc()['allume']==0){
        mysqli_query($_SESSION['bdd'],"UPDATE Appareil set allume = 1 where id_appareil = $idAppareil");
        $date = date("Y-m-d H:i:s");
        mysqli_query($_SESSION['bdd'],"INSERT into Fonctionner values ($idAppareil,'$date',NULL)");
    }
}

function eteindre($idAppareil){
    $result1 = mysqli_query($_SESSION['bdd'],"SELECT allume from Appareil where id_appareil = $idAppareil");
    if($result1->fetch_assoc()['allume']==1){
        mysqli_query($_SESSION['bdd'],"UPDATE Appareil set allume = 0 where id_appareil = $idAppareil");
        $date = date("Y-m-d H:i:s");
        mysqli_query($_SESSION['bdd'],"UPDATE Fonctionner SET fin_fonction = '$date' WHERE id_appareil = $idAppareil AND IFNULL(fin_fonction,1)=1");
    }
}