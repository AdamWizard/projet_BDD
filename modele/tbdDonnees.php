<?php

include("modele/connexionBDD.php");

function listeMaisonsProprio(){
    $idConnect = $_SESSION['id_connect'];
    $result = mysqli_query($_SESSION['bdd'],"Select * from Posseder inner join Maison on Posseder.id_maison = Maison.id_maison where id_utilisateur = $idConnect");
    return $result;
}



function listeAppartsMaison($idMaison){
    $result = mysqli_query($_SESSION['bdd'],"Select id_appartement,numero_appart,Degre_citoyennete.libelle as citoyLib,Type_appartement.libelle as typeApLib,Degre_securite.libelle as secuLib from Appartement inner join Degre_citoyennete on Appartement.id_deg_cit = Degre_citoyennete.id_deg_cit inner join Type_appartement on Appartement.id_type_appart = Type_appartement.id_type_appart inner join Degre_securite on Appartement.id_deg_cit = Degre_securite.id_secu where id_maison = $idMaison");
    return $result;
}

function listeAppareilsAppart($idAppart){
    $result = mysqli_query($_SESSION['bdd'],"Select Appareil.id_appareil,nom_appareil,demo,libelle from Appareil inner join Type_appareil on Appareil.id_type_appareil = Type_appareil.id_type_appareil inner join PossederAppareil on PossederAppareil.id_appareil=Appareil.id_appareil where id_appartement = $idAppart");
    return $result;
}

