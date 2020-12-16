<?php
	echo <<< END


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

        <button type="reset">valeurs par d�faut</button>
        <button type="submit">Inscription</button>
    </form>
    <a href="index.php">Connexion</a>

</body>

END;
