<?php
	echo <<< END
<head>
	<style>
			#header{
				height:10%;
				background-color:darkgray;
				text-align:center;
			}
			#titre{
				text-align:center;
				display: inline;
			}
			#container{
				width: 600px;
				height: 530px;
				margin: auto;
				margin-top: 100px;
				text-align: center;
				background-color: darkgray;
				border: 1px solid black;
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
			select{
				margin-bottom: 10px;
			}
	</style>
</head>
<body bgcolor="gray">
	
	<div id="header">
		<h1 id="titre">Inscription</h1>
	</div>
<div id="container">
    <form method="POST" action="">

        <div>
            <label for="idprenomnom">Prenom</label>
            <input name="prenom" type="text" id="idprenom" placeholder="Jean-michel" maxlength="50" required>
        </div>

        <div>
            <label for="idnom">Nom</label>
            <input name="nom" type="text" id="idnom" placeholder="Dupont" maxlength="50" required>
        </div>

        <div>
            <label for="iddate">Date de naissance</label>
            <input name="dateNaiss" type="date" if="iddate" placeholder="04/12/2000" required>
        </div>

        <div>
            <label for="idmail">Adresse mail</label>
            <input name="mail" type="email" id="idmail" placeholder="JM.exemple@gmail.com" maxlength="50" required>
        </div>

        <div>
            <label for="idtel">Telephone</label>
            <input name="tel" type="tel" id="idtel" placeholder="0669696969" maxlength="10" required pattern="[0-9]{10}">
        </div>

        <div>
            <label for="idmdp">Mot de passe</label>
            <input name="mdp" type="password" id="idmdp" maxlength="50" placeholder="***********" required>
        </div>

        <div>
            <label for="idmdp2">Valider le mot de passe</label>
            <input name="mdp2" type="password" id="idmdp2" maxlength="50" placeholder="***********" required>
        </div>
        
        <div>
            <label for="genre-select">Genre</label>
            <select name="genre" id="idGenre">
            <option value="1">Homme</option>
            <option value="2">Femme</option>
            <option value="3">Autre</option>
            </select>
        </div>

        <button type="reset">Valeurs par defaut</button>
        <button type="submit">Inscription</button>
    </form>
    <a href="index.php">Connexion</a>
</div>
</body>

END;
