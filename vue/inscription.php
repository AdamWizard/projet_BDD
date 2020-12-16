<?php
	echo <<< END


<body bgcolor="gray">

    <h1>Inscrivez-vous</h1>
    <form action="">
        <div>
            <label for="idnom">nom d'utilisateur</label>
            <input name="nom d'utilisateur" type="text" id="idnom">
        </div>

        <div>
            <label for="idmail">adresse mail</label>
            <input name="adresse mail" type="text" id="idmail">
        </div>

        <div>
            <label for="idmdp">mot de passe</label>
            <input name="mot de passe" type="password" id="idmdp">
        </div>

        <div>
            <label for="idmdp2">valider le mot de passe</label>
            <input type="password" id="idmdp2">
        </div>

        <button>Inscription</button>
    </form>
    <a href="index.php">Connexion</a>

</body>

END;
;