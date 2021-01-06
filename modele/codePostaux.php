<?php

include("modele/connexionBDD.php");

function listeCodes(){
    $result = mysqli_query($_SESSION['bdd'],"Select code_postal from Ville");
    return $result;
}