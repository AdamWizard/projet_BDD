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
			
			
		</style>
</head>
<body bgcolor="#00698F">

	<div id="header">
	
	
	
		<h1 id="titre">Tableau de bord</h1>
		
		<a id="deco" href="index.php?cible=principal&fonction=deconnexion"><img id="deco" src="deco.png" title="Se déconnecter"></a>
		
		<a href=""><img id="profil" src="profil.png" title="Profil"></a>
	</div>

    
    
    <a href="index.php?cible=maison&fonction=formulaire">Creer une maison</a>
</body>


END;
;