<?php
	echo <<< END

<!DOCTYPE html>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Inscription</title>
</head>

<body bgcolor="gray">

    <h1>Inscrivez-vous</h1>
    <form action="">
        <div>
            <label for="idnom">nom d'utilisateur</label>
            <input name="nom d'utilisateur" type="text" id="idnom" placeholder="Jean-michel exemple" required>
        </div>

        <div>
            <label for="idmail">adresse mail</label>
            <input name="adresse mail" type="email" id="idmail" placeholder="JM.exemple@gmail.com" required>
        </div>

        <div>
            <label for="iddate">Date de naissance</label>
            <input name="Date de naissance" type="date" if="iddate" required>
        </div>

        <div>
            <label for="idmdp">mot de passe</label>
            <input name="mot de passe" type="password" id="idmdp" required>
        </div>

        <div>
            <label for="idmdp2">valider le mot de passe</label>
            <input type="password" id="idmdp2" required>
        </div>

        <button type="reset">valeurs par défaut</button>
        <button type="submit">Inscription</button>
    </form>
    <a href="eco_home_accueil.html">Connexion</a>

</body>

</html>

END;
