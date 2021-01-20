<?php

echo <<<END
<!--BOUTTON DECONEXION-->
<form action="href=index.php?cible=principal&fonction =deconnexion">
    <input type="submit" style="background-color:palevioletred; position:absolute; right : 0 ;border-color:black" value="Se déconnecter" />
</form>

<body bgcolor="grey">

    <h1>Menu des maisons</h1>

    <form action="ajout_maison.php">
        <input type="submit" style="background-color:lightgray" value="Ajouter une maison" />
    </form>

    <!--EXEMPLE DE MAISON-->
    <maison>
        <b>[nom de la maison]</b>
        <b>[adresse de la maison]</b>

        <form action="eco_home_ajout_appart.html">
            <input type="submit" style="background-color:lightgray" value="Ajouter un appartement" />
        </form>

        <!--BOUTON POUR SUPPRIMER LA MAISON-->
        <form action="">
            <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cette maison" />
        </form>

        <!-- appart -->
        <ap>
            Appartement 1


            <form action="eco_home_ajout_equipement.html">
                <input type="submit" style="background-color:lightgray" value="Ajouter un équipement" />
            </form>

            <!--BOUTON POUT SUPPRIMER L APPART-->
            <form action="">
                <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cette maison" />
            </form>

            <eq>
                Réfrigérateur
                <br>

                <!--BOUTON POUR SUPPRIMER L EQUIPEMENT-->
                <form action="">
                    <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cet équipement" />
                </form>

                <br>
                [consomation][substance consomée];
                [émission][substance émise]
            </eq>

            <eq>
                Machine à laver
                <br>
                <form action="">
                    <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cet équipement" />
                </form>

                [consomation][substance consomée];
                [émission][substance émise]
            </eq>

            <eq>
                Télévision
                <br>
                <form action="">
                    <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cet équipement" />
                </form>

                [consomation][substance consomée];
                [émission][substance émise]
            </eq>

        </ap>

        <ap>
            Appartement 2

            <form action="eco_home_ajout_equipement.html">
                <input type="submit" style="background-color:lightgray" value="Ajouter un équipement" />
            </form>

            <form action="">
                <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cet appartement" />
            </form>
        </ap>

        <ap>
            Appartement 3


            <form action="eco_home_ajout_equipement.html">
                <input type="submit" style="background-color:lightgray" value="Ajouter un équipement" />
            </form>

            <!--BOUTON POUT SUPPRIMER L APPART-->
            <form action="">
                <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cet appartement" />
            </form>

            <eq>
                Réfrigérateur
                <br>

                <!--BOUTON POUR SUPPRIMER L EQUIPEMENT-->
                <form action="">
                    <input type="submit" style="background-color:palevioletred; border-color:black" value="Supprimer cet équipement" />
                </form>

                <br>
                [consomation][substance consomée];
                [émission][substance émise]
            </eq>

        </ap>

    <style>
        maison {
            border: 5px solid teal;
            padding: .5em;
            margin: 30px;
        }

        btnsupprma {
            background-color: palevioletred;
            border-color: black
        }

        ap {
            border: 2px solid black;
            padding: 15px;
            margin: 10px;
        }

        eq {
            border: 2px solid black;
            padding: .5em;
            margin-left: 10px;
            margin-right: 50px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        ap {
            display: flex;
            flex-direction: column;
            list-style: none;
        }

        maison {
            display: flex;
            flex-direction: column;
            list-style: none;
        }
    </style>



</body>

</html>
END;
;