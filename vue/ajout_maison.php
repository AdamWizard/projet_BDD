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

        <button type="reset">valeurs par defaut</button>
        <button type="submit">Creer</button>
    </form>
END;
;