<?php
include("modele/tbdDonnees.php");
$maisons = listeMaisonsProprio();
echo <<<END
<head>
		<style>
			#header{
				height:10%;
				background-color:darkgray;
				text-align:center;
			}
			#titre{
				margin-left:100px;
				text-align:center;
				display: inline;
			}
			#deco{
				float:right;
				margin-right:10px;
				margin-top:2px;
			}
			img{
				
				width:30px;
				height:30px;
			}
			#profil{
				margin-right:15px;
				margin-top:4px;
				float:right;
			}
			
			
		</style>
</head>
<body bgcolor="gray">

	<div id="header">
	
	
	
		<h1 id="titre">Tableau de bord</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		<a href=""><img id="profil" src="profil.png" title="Profil"></a>
    </div>

    <body bgcolor="grey">

    <h1>Menu des maisons</h1>

    <a href="index.php?cible=maison&fonction=formulaire"> <input type="button" style="background-color:lightgray" value="Ajouter une maison" /> </a>

END;
while($maison = $maisons->fetch_assoc()){
    //echo "<option value=".$maison['id_maison'].">".$maison['id_maison']."</option>";
    $nomMaison = $maison['nom_maison'];
    $numMaison = $maison['numero_maison'];
    $rueMaison = $maison['rue'];
    $cpMaison = $maison['code_postal'];
    $idMaison = $maison['id_maison'];
    $appartements = listeAppartsMaison($idMaison);
    echo <<<END
    <maison>
        <b>$nomMaison</b>
        <b>$numMaison $rueMaison $cpMaison</b>

        <form action="eco_home_ajout_appart.html">
            <input type="submit" style="background-color:lightgray" value="Ajouter un appartement" />
        </form>

        <!--BOUTON POUR SUPPRIMER LA MAISON-->
        <form action="">
            <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cette maison" />
        </form>
END;
        while($appart = $appartements->fetch_assoc()){
            $idAppart = $appart['id_appartement'];
            $numAppart = $appart['numero_appart'];
            $degCitoyennete = $appart['citoyLib'];
            $typeAppart = $appart['typeApLib'];
            $degSecu = $appart['secuLib'];
            $appareils = listeAppareilsAppart($idAppart);
            echo <<<END
            <!-- appart -->
            <ap>
                <p>Appartement numero : $numAppart</p>
                <p>Type : $typeAppart</p>
                <p>Degre de securite : $degSecu</p>
                <p>Degre de citoyennete : $degCitoyennete</p>
                <form action="eco_home_ajout_equipement.html">
                    <input type="submit" style="background-color:lightgray" value="Ajouter un equipement" />
                </form>

                <!--BOUTON POUT SUPPRIMER L APPART-->
                <form action="">
                    <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cette maison" />
                </form>
END;
        while($appareil = $appareils->fetch_assoc()){
            $id_appareil = $appareil['id_appareil'];
            $nom_appareil = $appareil['nom_appareil'];
            $demo = $appareil['demo'];
            $typeAppareil = $appareil['libelle'];

            echo <<<END

                <eq>
                    Nom de l'appareil : $nom_appareil
                    <br>
                    Type : $typeAppareil
                    <br>
END;
            if($demo != NULL){
                echo <<<END
                    <a href="$demo">Demonstration</a>
END;
            }
                    
            
            echo <<<END
                    <!--BOUTON POUR SUPPRIMER L EQUIPEMENT-->
                    <form action="">
                        <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cet equipement" />
                    </form>

                    <br>
                    [consomation][substance consomee];
                    [emission][substance emise]
                </eq>
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


    
    
    
echo <<<END

    <style>
        maison {
            border: 5px solid teal;
            padding: .5em;
            margin: 30px;
        }

        btnsupprma {
            background-color: palevioletred;
            border-color: black
        }

        ap {
            border: 2px solid black;
            padding: 15px;
            margin: 10px;
        }

        eq {
            border: 2px solid black;
            padding: .5em;
            margin-left: 10px;
            margin-right: 50px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        ap {
            display: flex;
            flex-direction: column;
            list-style: none;
        }

        maison {
            display: flex;
            flex-direction: column;
            list-style: none;
        }
    </style>
</body>
END;
;