<?php
	echo <<< END

<!DOCTYPE html>


<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Inscription</title>
</head>


<body bgcolor="gray">

    <h1>Inscrivez-vous</h1>
    <form action="">

        <div>
            <label for="idprenomnom">prenom</label>
            <input name="prenom" type="text" id="idprenom" placeholder="Jean-michel" required>
        </div>

        <div>
            <label for="idnom">nom</label>
            <input name="nom" type="text" id="idnom" placeholder="Exemple" required>
        </div>

        <div>
            <label for="iddate">Date de naissance</label>
            <input name="Date de naissance" type="date" if="iddate" placeholder="04/12/2000" required>
        </div>

        <div>
            <label for="idmail">adresse mail</label>
            <input name="adresse mail" type="email" id="idmail" placeholder="JM.exemple@gmail.com" required>
        </div>

        <div>
            <label for="idtel">tel</label>
            <input name="numero de telephone" type="tel" id="idtel" placeholder="0669696969" required pattern="[0-9]{10}">
        </div>

        <div>
            <label for="idmdp">mot de passe</label>
            <input name="mot de passe" type="password" id="idmdp" required>
        </div>

        <div>
            <label for="idmdp2">valider le mot de passe</label>
            <input type="password" id="idmdp2" required>
        </div>

        <button type="reset">valeurs par d�faut</button>
        <button type="submit">Inscription</button>
    </form>
    <a href="index.php">Connexion</a>

</body>

END;
