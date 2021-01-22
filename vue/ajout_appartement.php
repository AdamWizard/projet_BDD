<?php
//include("modele/nouvelAppart.php");
$typesAppart = getTypeAppart();
$secusAppart = getSecu();
$idMaison = $_GET['idMaison'];
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
				width: 50%;
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
			#annuler{
				text-align: center;
			}
			
			
		</style>
</head>
<body bgcolor="gray">

	<div id="header">
	
		<h1 id="titre">Ajout d'un appartement</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		<a href=""><img id="profil" src="profil.png" title="Profil"></a>
	</div>

<div id="container">

	<form method="POST" action="">
		<div>
				<label for="idNumAppart">Numero de l'appartement</label>
				<input name="NumAppart" type="number" id="idNumAppart" required>
		</div>

		<div>
            <label for="idTypeApp">Type d'appartement</label>
            <select name="typeApp" id="idTypeApp">
END;
;
while($type = $typesAppart->fetch_assoc()){
    echo "<option value=".$type['id_type_appart'].">".$type['libelle']."</option>";
}
echo <<<END
			</select>
		</div>
		<div>
            <label for="idSecuApp">Securite de l'appartement</label>
            <select name="secuApp" id="idSecuApp">

END;
;
while($secu = $secusAppart->fetch_assoc()){
    echo "<option value=".$secu['id_secu'].">".$secu['libelle']."</option>";
}
echo <<<END
			</select>
		</div>
		<input name="idMaison" id="idMaison" type="hidden" value="$idMaison">
		<input name="Valide" type="submit" id="idValide" value="Valider">
	</form>
	</div>
<div id="annuler">
	<a href="index.php">Annuler (revenir au tableau de bord)</a>
</div>

	
END;
;