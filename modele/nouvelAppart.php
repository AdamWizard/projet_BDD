<?php

include("modele/connexionBDD.php");

<<<<<<< HEAD
function getSecu(){
    $result = mysqli_query($_SESSION['bdd'],"Select id_secu,libelle from Degre_securite");
    return $result;
}

function getTypeAppart(){
    $result = mysqli_query($_SESSION['bdd'],"Select id_type_appart,libelle from Type_appartement");
    return $result;
}

function nouvel_appart($numAppart, $id_deg_cit , $id_type_appart , $id_secu , $id_maison){
    mysqli_query($_SESSION['bdd'],"INSERT INTO Appartement VALUES (NULL,$numAppart,$id_deg_cit,$id_type_appart,$id_secu,$id_maison)");
=======
function nouvel_appart(NULL, $numAppart , $id_deg_cit , $id_type_appart , $id_secu , $id_maison){
    mysqli_query($_SESSION['bdd'],"INSERT INTO Appartement VALUES (NULL , $numAppart , $id_deg_cit , $id_type_appart , $id_secu , $id_maison);
>>>>>>> 696905adbe551b42db26d7d9f88921f627d8beac
}