<?php
$appartsDispo = getAppartsDispo();
echo <<<END
<head>
<link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>
<body>

	<div id="header">
	
	
	
		<h1 id="titre">Louer un appartement</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		<a href=""><img id="profil" src="profil.png" title="Profil"></a>
	</div>

<div id="container">

<form method="POST" action="">
    <div>
            <label for="idAppart">Adresse</label>
            <select name="idAppart" id="idAppart">
END;
;
while($appart = $appartsDispo->fetch_assoc()){
    echo "<option value=".$appart['id_appartement'].">".$appart['numero_maison']." ".$appart['rue']." appartement ".$appart['numero_appart']."</option>";
}
echo <<<END
        </select>
    </div>
    <div>
            <label for="idNbHabs">Nombre d'habitants</label>
            <input name="nbHabs" type="number" id="idNbHabs" maxlength="11" required>
    </div>

    <button type="reset">Valeurs par defaut</button>
    <button type="submit">Créer</button>
    </form>
    <h2><a href="index.php">Annuler</a></h2>
</div>
END;
;