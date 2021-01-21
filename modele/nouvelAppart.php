<?php

include("modele/connexionBDD.php");

function nouvel_appart($numAppart, $numAppart , $id_deg_cit , $id_type_appart , $id_secu , $id_maison){
    mysqli_query($_SESSION['bdd'],"INSERT INTO Appartement VALUES (NULL , $numAppart , $id_deg_cit , $id_type_appart , $id_secu , $id_maison);
}