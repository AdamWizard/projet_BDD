<?php
include("modele/tbdDonnees.php");
if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
    $maisons = listeMaisonsAdmin();
}else{
    $maisons = listeMaisonsProprio();
}
echo <<<END
<head>
<link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>


	<div id="header">
	
	
	
		<h1 id="titre">Tableau de bord</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		<a href=""><img id="profil" src="profil.png" title="Profil"></a>
    </div>

    <body>
	
	<div id="presentation">

END;
    if(isset($_SESSION['admin']) && $_SESSION['admin']==1){
        echo <<<END
        <h1>VOUS ÊTES CONNECTÉ EN TANT QU'ADMINISTRATEUR</h1> 
        <h2>Liste des maisons enregistrées</h2> 
    </div>
END;
    }else{
        echo <<<END
	<a href="index.php?cible=maison&fonction=formulaire"> <input type="button" value="Ajouter une maison" /> </a>
    <a href="index.php?cible=maison&fonction=louer"> <input type="button" value="Louer un appartement" /> </a>
    <h1>MES MAISONS</h1> 
	</div>
END;
    }
    
while($maison = $maisons->fetch_assoc()){
    $nomMaison = $maison['nom_maison'];
    $numMaison = $maison['numero_maison'];
    $rueMaison = $maison['rue'];
    $cpMaison = $maison['code_postal'];
    $idMaison = $maison['id_maison'];
    $degreIso = $maison['libelle'];
    $appartements = listeAppartsMaison($idMaison);
    echo <<<END
    <maison>
        <h2>$nomMaison - $numMaison $rueMaison - $cpMaison</h2>
        <p>Degré d'isolation : $degreIso</p>
         
        <a href="index.php?cible=maison&fonction=nouvelAppart&idMaison=$idMaison"><input type="button" value="Ajouter un appartement" /></a>
        

        <!--BOUTON POUR SUPPRIMER LA MAISON-->
        
        <input class="suppr" type="button" value="Supprimer cette maison" />
        
END;
        while($appart = $appartements->fetch_assoc()){
            $idAppart = $appart['id_appartement'];
            $numAppart = $appart['numero_appart'];
            $degCitoyennete = $appart['citoyLib'];
            $typeAppart = $appart['typeApLib'];
            $degSecu = $appart['secuLib'];
            $pieces=listePiecesAppart($idAppart);
            
            echo <<<END
            <!-- appart -->
            <ap>
                <h3>Appartement $typeAppart numero : $numAppart</h3>
				<h4>Degre de securite : $degSecu</h4>
				<h4>Degre de citoyennete : $degCitoyennete</h4>
                
                
                <a href="index.php?cible=maison&fonction=nouvellePiece&idAppart=$idAppart"><input type="button" value="Ajouter une piece"/></a>

                <!--BOUTON POUT SUPPRIMER L APPART-->
                
                <input class="suppr" type="button"  value="Supprimer cet appart" />
                
END;
		while($piece = $pieces->fetch_assoc()){
			
		$idPiece= $piece['id_piece'];
		$libellePiece = $piece['libelle_piece'];
		$libelleTypePiece= $piece['libelle'];
		$appareils = listeAppareilsPiece($idPiece);
			
        echo<<<END
            <!-- piece -->
            <piece>
                <p>Pièce : $libellePiece</p>
                <p>Type de pièce : $libelleTypePiece</p>
                
                <a href="index.php?cible=maison&fonction=nouvelAppareil&idPiece=$idPiece"><input type="button" value="Ajouter un appareil" /></a>
                

                <!--BOUTON POUT SUPPRIMER L APPART-->
                
                <input class="suppr" type="button" value="Supprimer cette piece" />
                
		

END;

		
		
        while($appareil = $appareils->fetch_assoc()){
            $id_appareil = $appareil['id_appareil'];
            $nom_appareil = $appareil['nom_appareil'];
            $demo = $appareil['demo'];
            $typeAppareil = $appareil['libelle'];
            $allume = $appareil['allume'];
            $consos = consoAppareil($id_appareil);
            if($allume == 0){
                $statut = "éteint";
            }else{
                $statut = "allumé";
            }
            echo <<<END

                <eq>
                    Nom de l'appareil : $nom_appareil
                    <br>
                    Type : $typeAppareil
                    <br>
                    Actuellement $statut
END;
            if($allume == 0){
                echo <<<END
                    <a href="index.php?cible=maison&fonction=allumer&idAppareil=$id_appareil"><input type="button" value="Allumer"/></a>
                    <br>
END;
            }else{
                echo <<<END
                    <a href="index.php?cible=maison&fonction=eteindre&idAppareil=$id_appareil"><input type="button" value="Eteindre"/></a>
                    <br>
END;
            }
            if($demo != NULL){
                echo <<<END
                    <a href="$demo">Vidéo conseille</a>
                    <br>
END;
            }
                    
            
            echo <<<END
                    <!--BOUTON POUR SUPPRIMER L EQUIPEMENT-->
                    
                    <input class="suppr" type="submit" value="Supprimer cet appareil" />
                    

                    <br>
END;
            while($conso = $consos->fetch_assoc()){
                $ressource = $conso['nom_ressource'];
                $quantite = $conso['total'];
                if($quantite != NULL){
                    $quantite = round($quantite,3);
                    echo <<<END
                    Consommation totale d'$ressource : $quantite (en Kilowatt ou Litres)
                    <br>
END;
                }
            }
            echo <<<END
                </eq>
END;
        }
        echo <<<END
            </piece>
END;
}
        echo <<<END
            </ap>
END;
        }
        echo <<<END
    </maison>
	
END;
}
if(!isset($_SESSION['admin']) || $_SESSION['admin']!=1){
echo <<<END
<div id="presentation">
    <h1>MES LOCATIONS</h1>
</div>
END;
$appartements = listeAppartsLoc();
while($appart = $appartements->fetch_assoc()){
    $idAppart = $appart['idApp'];
    $numAppart = $appart['numero_appart'];
    $degCitoyennete = $appart['citoyLib'];
    $typeAppart = $appart['typeApLib'];
    $degSecu = $appart['secuLib'];
    $pieces=listePiecesAppart($idAppart);
    
    echo <<<END
    <!-- appart -->
    <ap>
        <h3>Appartement $typeAppart numero : $numAppart</h3>
        <h4>Degre de securite : $degSecu</h4>
        <h4>Degre de citoyennete : $degCitoyennete</h4>
        
        
        <a href="index.php?cible=maison&fonction=nouvellePiece&idAppart=$idAppart"><input type="button" value="Ajouter une piece"/></a>

        <!--BOUTON POUT SUPPRIMER L APPART-->
        
        <input class="suppr" type="button"  value="Supprimer cet appart" />
        
END;
while($piece = $pieces->fetch_assoc()){
    
$idPiece= $piece['id_piece'];
$libellePiece = $piece['libelle_piece'];
$libelleTypePiece= $piece['libelle'];
$appareils = listeAppareilsPiece($idPiece);
    
echo<<<END
    <!-- piece -->
    <piece>
        <p>Pièce : $libellePiece</p>
        <p>Type de pièce : $libelleTypePiece</p>
        
        <a href="index.php?cible=maison&fonction=nouvelAppareil&idPiece=$idPiece"><input type="button" value="Ajouter un appareil" /></a>
        

        <!--BOUTON POUT SUPPRIMER L APPART-->
        
        <input class="suppr" type="button" value="Supprimer cette piece" />
        


END;



while($appareil = $appareils->fetch_assoc()){
    $id_appareil = $appareil['id_appareil'];
    $nom_appareil = $appareil['nom_appareil'];
    $demo = $appareil['demo'];
    $typeAppareil = $appareil['libelle'];
    $allume = $appareil['allume'];
    $consos = consoAppareil($id_appareil);
    if($allume == 0){
        $statut = "éteint";
    }else{
        $statut = "allumé";
    }
    echo <<<END

        <eq>
            Nom de l'appareil : $nom_appareil
            <br>
            Type : $typeAppareil
            <br>
            Actuellement $statut
END;
    if($allume == 0){
        echo <<<END
            <a href="index.php?cible=maison&fonction=allumer&idAppareil=$id_appareil"><input type="button" value="Allumer"/></a>
            <br>
END;
    }else{
        echo <<<END
            <a href="index.php?cible=maison&fonction=eteindre&idAppareil=$id_appareil"><input type="button" value="Eteindre"/></a>
            <br>
END;
    }
    if($demo != NULL){
        echo <<<END
            <a href="$demo">Vidéo conseille</a>
            <br>
END;
    }
            
    
    echo <<<END
            <!--BOUTON POUR SUPPRIMER L EQUIPEMENT-->
            
            <input class="suppr" type="submit" value="Supprimer cet appareil" />
            

            <br>
END;
    while($conso = $consos->fetch_assoc()){
        $ressource = $conso['nom_ressource'];
        $quantite = $conso['total'];
        if($quantite != NULL){
            $quantite = round($quantite,3);
            echo <<<END
            Consommation totale d'$ressource : $quantite (en Kilowatt ou Litres)
            <br>
END;
        }
    }
    echo <<<END
        </eq>
END;
}
echo <<<END
    </piece>
END;
}
echo <<<END
    </ap>
END;
}
}

    
    
    
echo <<<END
	
    <style>
        



        eq {
            border: 2px solid black;
            padding: .5em;
            margin-left: 10px;
            margin-right: 50px;
            margin-top: 10px;
            margin-bottom: 5px;
        }




    </style>
</body>
END;
;