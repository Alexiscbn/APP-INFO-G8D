
<!DOCTYPE HTML>
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="Style.css"/>
    <title>Plateforme utilisateur ConnectUs</title>
</head>


<body>
<img src="../ConnectUs.png" alt="Logo" />


<form method="post" action="traitement.php">

    <div class="date">
        <?php
        $date = date("D d M Y");
        $heure = date("H:i");
        echo "Nous sommes $date, il est $heure";
        ?>
    </div>


    <div class="test">
        <h2>Connectez-vous à votre interface <strong> ConnectUs </strong> pour accéder à vos données personnelles. </h2>
        <label>Nom d'utilisateur</label> : <input type="text" name="Identifiant" />
        </br><label for="pass"> Mot de passe :</label>
        <input type="password" name="Mot de passe" /></br>

    </br>
        <a href="Piece.php"> <input type="button" value="Connexion"></a>
        <a href="Inscription.php"><input type="button" value="S'inscrire"></a>
    </br><input type="button" value="Aide">
    </br><input type="button" value="Contactez-nous">

    </div>
</form>

<footer>
            <p>
                <span class="gauche"><div class="logo">
                <img class="logo" src="../ConnectUs.png" alt="Logo">
                    </div></span>
                <a href="">Mentions Légales</a>
                <span class="centre">ConnectUs est une start-up révolutionnaire permettant à chacun de ses utilisateurs
        d'avoir une <br>vision globale de tous les instants de son habitation connectée grâce aux systèmes DomIsep </span>
            </p>
</footer>



</body>
</html>

