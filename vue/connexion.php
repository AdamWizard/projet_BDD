<?php
echo <<<END

<body bgcolor="gray">

    <h1>Accueil</h1>
    <h1>Vous avez deja un compte ? Connectez-vous</h1>
    <form method="POST" action="">
        <div>
            <label for="idMail">email</label>
            <input name="mail" type="text" id="idMail">
        </div>

        <div>
            <label for="idmdp">mot de passe</label>
            <input name="mdp" type="password" id="idmdp">
        </div>

        <button type="submit">Connexion</button>
    </form>
    
    <h1>Pas encore de compte ? Inscrivez-vous</h1>
    <a href="index.php?cible=inscription&fonction=afficher">Inscription</a>

</body>


END;
;