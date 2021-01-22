<?php

$typesPiece = getTypePiece();
$idAppart = $_GET['idAppart'];
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

<form method="POST" action="">
    <div>
            <label for="idNomPiece">Nom de la pièce</label>
            <input name="nomPiece" type="text" id="idNomPiece" required>
	</div>
	<div>
			<label for="idTypePiece">Type de piece</label>
			<select name="typePiece" id="idTypePiece">

END;
;
while($type = $typesPiece->fetch_assoc()){
    echo "<option value=".$type['id_type_piece'].">".$type['libelle']."</option>";
}
echo <<<END
			</select>
	</div>
	<input name="idAppart" id="idAppart" type="hidden" value="$idAppart">
			
    <input name="Valide" type="submit" id="idValide" value="Valider">
	
</form>

	
	
    <a href="index.php">Annuler (revenir au tableau de bord)</a>
	
END;
;