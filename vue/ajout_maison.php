<?php
$codePostaux = listeCodes();
$degreIso = getDegIso();
echo <<<END
<head>
<link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>
<body>

	<div id="header">
	
	
	
		<h1 id="titre">Création d'une maison</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		<a href=""><img id="profil" src="profil.png" title="Profil"></a>
	</div>

<div id="container">

<form method="POST" action="">
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
	<div>
            <label for="idDegreIso">Degré d'isolation</label>
            <select name="degreIso" id="idDegreIso">
END;
;
while($degre = $degreIso->fetch_assoc()){
    echo "<option value=".$degre['id_deg_iso'].">".$degre['libelle']."</option>";
}
echo <<<END
        </select>
    </div>


    <button type="reset">Valeurs par defaut</button>
    <button type="submit">Créer</button>
    </form>
    <h2><a href="index.php">Annuler</a></h2>
</div>
END;
;