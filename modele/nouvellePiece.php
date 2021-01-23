<?php

include("modele/connexionBDD.php");

function getTypePiece(){
    $result = mysqli_query($_SESSION['bdd'],"Select id_type_piece,libelle from Type_piece");
    return $result;
}

function nouvelle_Piece($libellePiece,$idAppart,$idTypePiece){
    mysqli_query($_SESSION['bdd'],"INSERT INTO Piece VALUES (NULL,'$libellePiece',$idAppart,$idTypePiece)");
}
