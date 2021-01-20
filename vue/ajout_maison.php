<?php
include("modele/codePostaux.php");
$codePostaux = listeCodes();
echo <<<END
<h1>FORMULAIRE</h1>
<a href="index.php?cible=principal&fonction=deconnexion">Se deconnecter</a>
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
    <button type="reset">valeurs par defaut</button>
    <button type="submit">Creer</button>
    </form>
    <a href="Menu_maisons.php">Annuler (revenir au menu des maisons)</a>
END;
;