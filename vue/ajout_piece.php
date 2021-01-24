<?php

$typesPiece = getTypePiece();
$idAppart = $_GET['idAppart'];
echo <<<END
<head>
<link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>
<body>

	<div id="header">
	
		<h1 id="titre">Ajout d'une pièce</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		
	</div>

<div id="container">

<form method="POST" action="">
    <div>
            <label for="idNomPiece">Nom de la pièce</label>
            <input name="nomPiece" type="text" id="idNomPiece" required>
	</div>
	<div>
			<label for="idTypePiece">Type de piece</label>
			<select name="typePiece" id="idTypePiece">

END;
;
while($type = $typesPiece->fetch_assoc()){
    echo "<option value=".$type['id_type_piece'].">".$type['libelle']."</option>";
}
echo <<<END
			</select>
	</div>
	<input name="idAppart" id="idAppart" type="hidden" value="$idAppart">
			
    <input name="Valide" type="submit" id="idValide" value="Valider">
	
</form>

	
	
    <h2><a href="index.php">Annuler</a></h2>
	
END;
;