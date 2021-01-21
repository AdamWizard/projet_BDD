<?php
echo <<<END
<head>
		<style>
			#header{
				height:10%;
				background-color:#0BA4DB;
				text-align:center;
			}
			#titre{
				
				text-align:center;
				display: inline;
			}
			#container{
				padding-top:10px;
				width: 600px;
				height: 320px;
				margin: auto;
				margin-top: 100px;
				text-align: center;
				background-color: #0BA4DB;
				
			}
			input{
				margin-bottom: 10px;
				width: 50%;
				padding: 6px 10px;
				display: inline-block;
			}
			label{
				display: block;
				
			}
			button{
				width: 200px;
				height: 30px
			}

			
		</style>
</head>
<body bgcolor="#00698F">

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
		
		<h1>Pas encore de compte ? <a href="index.php?cible=inscription&fonction=afficher">Inscrivez-vous</a></h1>
		
	</div>
</body>


END;
;