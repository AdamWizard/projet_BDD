<?php

include("modele/connexionBDD.php");

function nouvel_appareil(NULL, $nomAppareil , $demo , $debut_fonctionnement , $id_fonctionnement , $id_type_appareil){
    mysqli_query($_SESSION['bdd'],"INSERT INTO Appareil VALUES (NULL, $nomAppareil , $demo , $debut_fonctionnement , $id_fonctionnement , $id_type_appareil);
}