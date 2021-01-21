<?php

try{	
    // Connection using PDO
    //$db = new PDO("mysql:host=localhost;dbname=maisonconnectee", "root", "");
    // Connection using mysqli
    $_SESSION['bdd'] = mysqli_connect("127.0.0.1", "root", "","etudedecas");
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}