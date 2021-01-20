<?php
include("modele/codePostaux.php");
$codePostaux = listeCodes();
echo <<<END
<h1>FORMULAIRE</h1>
<a href="index.php?cible=principal&fonction=deconnexion">Se deconnecter</a>
<form method="POST" action="">
    <div>
            <label for="idnommaison">nom de la maison</label><br />
            <input name="nommaison" type="text" id="idnommaison" placeholder="maison 1" maxlength="50" required>
    </div>
    <div
            <label for="idCode">Code postal</label>
            <input name="Code" type="number" if="idCode" placeholder="02100" required>
END;
;
while($ligne = $codePostaux->fetch_assoc()){
    echo "<option value=".$ligne['code_postal'].">".$ligne['code_postal']."</option>";
}
echo <<<END
        </select>
    </div>
    <div>
            <label for="idRue">rue</label>
            <input name="rue" type="text" id="idRue" placeholder="Avenue du général Leclerc" required>
    </div>
    <div>
            <label for="idNumero">numéro</label>
            <input name="numero" type="text" id="idNumero" placeholder="42" required>
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