<?php
$idPiece = $_GET['idPiece'];
$typesAppareil = getTypeAppareil();
echo <<<END
<head>
<link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>


	<div id="header">
	
		<h1 id="titre">Ajout d'un appareil</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		<a href=""><img id="profil" src="profil.png" title="Profil"></a>
	</div>

<div id="container">

<form method="POST" action="">
    <div>
            <label for="idNomAppareil">Nom de l'appareil</label>
            <input name="nomAppareil" type="text" id="idNomAppareil" required>
			
			<div>
            <label for="idTypeAppareil">Type d'appareil</label>
            <select name="typeAppareil" id="idTypeAppareil">

END;
;
while($typeApp = $typesAppareil->fetch_assoc()){
    echo "<option value=".$typeApp['id_type_appareil'].">".$typeApp['libelle']."</option>";
}
echo <<<END
			</select>
			</div>
			<div>
				<label for="idDesc">Emplacement de l'appareil</label>
				<input name="desc" type="text" id="idDesc" required>
			</div>
			<input name="idPiece" id="idPiece" type="hidden" value="$idPiece">

            <input name="Valide" type="submit" id="idValide" value="Valider">
    </div>
</form>

	
	
    <a href="index.php">Annuler (revenir au tableau de bord)</a>
	
END;
;