<?php
//include("modele/nouvelAppart.php");
$typesAppart = getTypeAppart();
$secusAppart = getSecu();
$idMaison = $_GET['idMaison'];
echo <<<END
<head>
<link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>
<body>

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
	<h2><a href="index.php">Annuler</a></h2>
	</div>


	
END;
;