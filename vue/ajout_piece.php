<?php
echo <<<END
<head>
		<style>
			#header{
				height:10%;
				background-color:darkgray;
				text-align:center;
			}
			#titre{
				margin-left:100px;
				text-align:center;
				display: inline;
			}
			#deco{
				float:right;
				margin-right:10px;
				margin-top:2px;
			}
			img{
				
				width:30px;
				height:30px;
			}
			#profil{
				margin-right:15px;
				margin-top:4px;
				float:right;
			}
			#container{
				padding-top:10px;
				width: 600px;
				height: 350px;
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
	
		<h1 id="titre">Ajout d'une pièce</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		<a href=""><img id="profil" src="profil.png" title="Profil"></a>
	</div>

<div id="container">

<form method="POST" action="tableau_de_bord.php">
    <div>
            <label for="idNomPiece">Nom de la pièce</label>
            <input name="NomPiece" type="text" id="idNomPiece" required>
			
            <label for="idTypepiece">Type de pièce</label>
            <input name="TypePiece" type="date" id="idTypePiece" required>
			
            <input name="Valide" type="submit" id="idValide" value="Valider"required>
    </div>
</form>

	
	
    <a href="index.php">Annuler (revenir au tableau de bord)</a>
	
END;
;