<?php
echo <<<END

<body bgcolor="gray">

    <h1>Accueil</h1>
    <h1>Vous avez d�ja un compte? Connectez-vous</h1>
    <form action="">
        <div>
            <label for="idnom">nom d'utilisateur</label>
            <input name="nom d'utilisateur" type="text" id="idnom">
        </div>

        <div>
            <label for="idmdp">mot de passe</label>
            <input name="mot de passe" type="password" id="idmdp">
        </div>

        <button>Connexion</button>
    </form>
    
    <h1>Pas encore de compte? Inscrivez-vous</h1>
    <a href="index.php?cible=inscription&fonction=afficher">Inscription</a>

</body>


END;
;