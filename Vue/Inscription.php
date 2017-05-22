<!DOCTYPE HTML>
<head xmlns="http://www.w3.org/1999/html">
    <meta charset = "utf-8" />
    <link rel = "stylesheet" href="style.css"/>
    <title>Plateforme utilisateur ConnectUs</title>
</head>

<header>
    <D>
        <section>
            <div class="logo">
                <img class="logo" src="../ConnectUs.png" alt="Logo">
            </div>
            <div class="onglets">
                <nav>
                    <ul class="menu">
                        <li class="enCours"><a href="../Vue/Dashboard.php">Données en temps réel</a></li>
                        <li><a href="Inscription.php">Mes informations</a></li>
                        <li><a href="">Actionneurs</a></li>
                        <li><a href="">Statistiques</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </D>
</header>
<h1><u>Formulaire d'inscription</u></h1>
<form method="post" action="Inscription.php">

    <p>
    <div class="Formulaire">
        <br><label>Nom</label> : <input type="text" name="Nom" /><br>
        <br><label>Prénom</label> : <input type="text" name="Prénom" /><br>
        <br><label>Pseudo forum ConnectUs </label> : <input type="text" name="Pseudo"></br>
        <br><label>Identifiant</label> : <input type="text" name="Identifiant"><br>

        <br><label for="Sexe">Sexe : </label>
        <select name="Sexe" id="Sexe">
            <option value="homme">Homme</option>
            <option value="femme">Femme</option></br>
        </select> <br>

        <br><label>Âge</label> : <input type="number" name="Age"><br>
        <br><label>Date de naissance</label> : <input type="date" name="date"><br>
        <br><label>Numéro de téléphone</label> : <input type="number" name="Numéro de téléphone"><br>
        <br><label>Adresse</label> : <input type="text" name="adresse"><br>
        <br><label>Code postal</label> : <input type="number" name="Code postal"><br>
        <br><label>Ville</label> : <input type="text" name="ville"><br>
        <br><label>Adresse e-mail</label> : <input type="email" name="Adresse e-mail" /><br>
        <br><label>Confirmation de l'adresse e-mail</label> : <input type="text" name="Confirmation de l'adresse e-mail" /><br>
        <br><label for="pass">Votre mot de passe :</label><input type="password" name="pass" id="pass" /><br>
        <br><label for="pass">Confirmation du mot de passe : </label><input type="password" name="Confirmation du mot de passe" /><br>
        <br><a href="Accueil.php"><input type="button" value="Confirmez vos informations"></a>
        <form method="post" action="traitement.php"><br>
            <label>
                <br><input type="checkbox" id="validation" value="checkbox1">
                Veuillez accepter les conditions générales d'utilisation, consultables en cliquant <a href="CGV.php">ici</a> :<br />
            </label>
        </form>
    </div>
    </p>
</form>
<div class="logo">
    <img src="../ConnectUs.png" width="200" alt="Logo" />
</div>
