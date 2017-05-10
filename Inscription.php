<!DOCTYPE HTML>
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style.css"/>
    <title>Plateforme utilisateur ConnectUs</title>
</head>

<h1><u>Formulaire d'inscription</u></h1>
<form method="post" action="inscription.php">

    <p>
    <div class="Formulaire">
        <br><label>Nom</label> : <input type="text" name="Nom" /><br>
        <br><label>Prénom</label> : <input type="text" name="Prénom" /><br>
        <br><label>Adresse e-mail</label> : <input type="email" name="Adresse e-mail" /><br>
        <br><label>Confirmation de l'adresse e-mail</label> : <input type="text" name="Confirmation de l'adresse e-mail" /><br>
        <br><label for="pass">Votre mot de passe :</label><input type="password" name="pass" id="pass" /><br>
        <br><label for="pass">Confirmation du mot de passe : </label><input type="password" name="Confirmation du mot de passe" /><br>
        <br><input type="button" value="Confirmez vos informations">
        <form method="post" action="traitement.php"><br>
            <label>
                <br><input type="checkbox" id="validation" value="checkbox1">
                Veuillez accepter les conditions générales d'utilisation, consultables en cliquant <a href="#">ici</a> :<br />
            </label>
        </form>
    </div>
    </p>
</form>
<div class="logo">
    <img src="ConnectUs.png" width="200" alt="Logo" />
</div>
