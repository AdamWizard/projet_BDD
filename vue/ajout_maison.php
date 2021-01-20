<?php
include("modele/codePostaux.php");
$codePostaux = listeCodes();
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
			#container{
				padding-top:10px;
				width: 600px;
				height: 350px;
				margin: auto;
				margin-top: 100px;
				text-align: center;
				background-color: darkgray;
				border: 1px solid black;
			}
			input{
				margin-bottom: 10px;
				width: 50%;
				padding: 6px 10px;
				display: inline-block;
			}
			label{
				display: block;
				
			}
			button{
				width: 200px;
				height: 30px
			}
			select{
				margin-bottom: 10px;
			}
			
			
		</style>
</head>
<body bgcolor="gray">

	<div id="header">
	
	
	
		<h1 id="titre">Création d'une maison</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		<a href=""><img id="profil" src="profil.png" title="Profil"></a>
	</div>

<div id="container">

<form method="POST" action="tableau_de_bord.php">
    <div>
            <label for="idnomMaison">Nom de la maison</label>
            <input name="nomMaison" type="text" id="idnomMaison" maxlength="50" required>
    </div>
    <div>
            <label for="idCodeP">Code Postal</label>
            <select name="codeP" id="idCodeP">
END;
;
while($ligne = $codePostaux->fetch_assoc()){
    echo "<option value=".$ligne['code_postal'].">".$ligne['code_postal']."</option>";
}
echo <<<END
        </select>
    </div>
    <div>
            <label for="idRue">Nom de rue</label>
            <input name="nomRue" type="text" id="idRue" maxlength="50" required>
    </div>
    <div>
            <label for="idNumero">Numero</label>
            <input name="numero" type="number" id="idNumero" maxlength="50" required>
    </div>
    <div>
    <label for="idEval">Description de l'etat</label>
    <input name="evaluation" type="text" id="idEval" maxlength="50" required>
    </div>
    <button type="reset">Valeurs par defaut</button>
    <button type="submit">Créer</button>
    </form>
<<<<<<< HEAD
    <a href="index.php">Annuler (revenir au menu des maisons)</a>
=======
    <a href="index.php">Annuler (revenir au tableau de bord)</a>
</div>
>>>>>>> 6997763676994309e8f6640221d87a9b2504c9a3
END;
;