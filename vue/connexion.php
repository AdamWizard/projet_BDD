<?php
echo <<<END
<head>
<link href="css/style.css" rel="stylesheet" media="all" type="text/css">
</head>


	<div id="header">
		<h1 id="titre">Accueil</h1>
	</div>
	<div id="container">
		
		<form method="POST" action="./index.php">
		<h1>Connexion</h1>
			<div>
				<label for="idMail">Email</label>
				<input name="mail" type="text" id="idMail" placeholder="Entrer l'adresse mail">
			</div>

			<div>
				<label for="idmdp">Mot de passe</label>
				<input name="mdp" type="password" id="idmdp" placeholder="Entrer le mot de passe">
			</div>

			<button type="submit">Connexion</button>
		</form>
		
		<h2>Pas encore de compte ? <a href="index.php?cible=inscription&fonction=afficher">Inscrivez-vous</a></h2>
		
	</div>
</body>


END;
;