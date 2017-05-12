
<!DOCTYPE HTML>
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style.css"/>
    <title>Plateforme utilisateur ConnectUs</title>
</head>

<body>
<img src="ConnectUs.png" alt="Logo" />


<form method="post" action="traitement.php">


    <?php
    $date = date("d-m-Y");
    $heure = date("H:i");
    echo "Nous sommes le $date et il est $heure";
    ?>

    <div class="test">
        <h2>Connectez-vous à votre interface <strong> ConnectUs </strong> pour accéder à vos données personnelles. </h2>
        <label>Nom d'utilisateur</label> : <input type="text" name="Identifiant" />
        </br><label for="pass"> Mot de passe :</label>
        <input type="password" name="Mot de passe" />

    </br>
        <a href="Accueil.php"><input type="button" value="Connexion"></a>
    <input type="button" value="Connexion">
        <a href="Inscription.php"><input type="button" value="S'inscrire"></a>

    </br><input type="button" value="Aide">
    </br><input type="button" value="Contactez-nous">

    </div>
</form>

<p>Faire un petit paragraphe de présentation de ConnectUs</p>


</body>
</html>

