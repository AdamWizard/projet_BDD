<?php

include("modele/connexionBDD.php");


function getTypeAppareil(){
    $result = mysqli_query($_SESSION['bdd'],"SELECT id_type_appareil,libelle from Type_appareil");
    return $result;
}

function nouvel_appareil($nomAppareil, $idTypeAppareil,$desc,$id_piece){
    mysqli_query($_SESSION['bdd'],"INSERT INTO Appareil VALUES (NULL,'$nomAppareil',NULL,NULL,$idTypeAppareil)");
    if(mysqli_insert_id($_SESSION['bdd'])!=0){
        $idAppareil = mysqli_insert_id($_SESSION['bdd']);
        mysqli_query($_SESSION['bdd'],"INSERT INTO Emplacement VALUES ($idAppareil, '$desc', $id_piece)");
    }
}